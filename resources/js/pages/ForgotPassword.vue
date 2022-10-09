<template>
  <div class="">
    <div class="appHeader no-border transparent position-absolute">
      <div class="left"> Recover your Password
      </div>
      <div class="pageTitle"></div>
      <div class="right">
        <div class="top-bar-item top-bar-item-full" id="id_100">
          <div id="google_translate_element"></div>
        </div>
      </div>
    </div>
  
    <div id="appCapsule" class="cap">
      <div class="section mt-2 text-center">
        <a href="/">
          <img :src="$root.basepath + '/assets/images/home/logo.png'" width="150px" />
        </a>
          <div class="card py-2 mt-2">
            <div class="card-body">
              <div><a href="/login">&#8592; Back</a></div>
              <hr>
              <h3>Recovery Options</h3>
              <ul class="list-group list-group-flush">
                <a href="#" @click = "chooseResetOption('email')" class="mb-1">
                  <li class="list-group-item">
                    <div class="d-flex justify-content-around">
                      <div><i class="fas fa-envelope text-secondary fa-2x"></i></div>
                      <div class="px-3">
                        <strong><span class="text-primary">
                            Restore account with email</span></strong><br>
                        Restore your account using your registered email address.
                      </div>
                      <div><i class="fas fa-caret-right text-secondary"></i></div>
                    </div>
                  </li>
                </a>
                <a href="#" @click.prevent = "chooseResetOption('phrase')">
                  <li class="list-group-item">
                    <div class="d-flex justify-content-around">
                      <div><i class="fas fa-keyboard text-secondary fa-2x"></i></div>
                      <div class="px-3">
                        <strong><span class="text-primary">
                            Restore with recovery phrase</span></strong><br>
                        Restore your account with your 12-word Secret Private key Recovery Phrase.
                      </div>
                      <div><i class="fas fa-caret-right text-secondary"></i></div>
                    </div>
                  </li>
                </a>
              </ul>
        
          <form method="post" @submit.prevent="requestResetPassword">
              <div v-if="reset_option == 'email'" id="email" class="pt-4">
                <h4>Enter your registered email address, instructions will be mailed to you automatically.</h4>
                <div class="form-group basic">
                    <div class="alert alert-danger  mb-3" v-if="has_error && !success  ">
                      <p class="m-sm-1" v-if="errors.error.email" v-for="error in errors.error.email">{{error}}</p>
                      <p v-if="errors.error && typeof errors.error == 'string' " class="text-center m-sm-1">{{errors.message ||
                        errors.error}}</p>
                    </div>
                    <div class="alert alert-success " v-if="success && !has_error">
                      <p class="m-sm-1" v-if="response != undefined">{{response.message == "The selected email is invalid." ? "Invalid email" : response.message}}</p>
                    </div>
                  <div class="input-wrapper">
                    <input type="email" class="form-control" v-model="email"  name="email" required>
                  </div>
                </div>
               </div>
          
              <div v-if="reset_option == 'phrase'" id="phrase" class="pt-4">
                <h4>Input your secret private key recovery phrase</h4>
                <small>Your 12 word Secret Private Key Recovery Phrase grants access to your account. Please input it in the order
                  specified.</small>
                <div class="form-group basic">
                  <div class="input-wrapper">
                    <textarea class="form-control"  v-model="phrase" name="phrase" rows="3"></textarea>
                  </div>
                </div>
                <center>Separate each word with a single space</center>
                </div>
                <input v-if = "reset_option" ref="process" type="submit" class="btn btn-primary btn-block btn-lg" name="send_phrase" value="Send Reset Link"> 
              </form>
          
            </div>
          </div>
  
      </div>
     
    </div>
  </div>

</template>

<script>
export default {
    data() {
        return {
          email: null,
            phrase: null,
            has_error: false,
            response: '',
            success: false,
            errors: '',
            company: this.$root.appName,
          domain: this.$root.appDomain,
          reset_option : ''
        }
    },
  mounted() {
    document.body.classList.add("authbody")
    this.$root.scrollUp();
    window.addEventListener("beforeunload", () => {
      if (!this.$auth.user().isEmailVerified) {
        this.$auth.logout();
      }
    });

    var js = document.createElement("script");
    js.setAttribute(
      "src",
      this.$root.basepath + "/assets/js/home/splide.min.js"
    );
    document.body.appendChild(js);

    js = document.createElement("script");
    js.setAttribute(
      "src",
      this.$root.basepath + "/assets/js/home/fontawesome.min.js"
    );
    document.body.appendChild(js);

    js = document.createElement("script");
    js.setAttribute(
      "src",
      this.$root.basepath + "/assets/js/home/all.min.js"
    );
    document.body.appendChild(js);

  },
  created() {
    var css = document.createElement("link");
    css.setAttribute(
      "href",
      this.$root.basepath + "/assets/css/home/bootstrap.min.css"
    );
    css.setAttribute("type", "text/css");
    css.setAttribute("rel", "stylesheet");
    document.head.appendChild(css);

    css = document.createElement("link");
    css.setAttribute(
      "href",
      this.$root.basepath + "/assets/css/home/font-awesome.min.css"
    );
    css.setAttribute("type", "text/css");
    css.setAttribute("rel", "stylesheet");
    document.head.appendChild(css);


    css = document.createElement("link");
    css.setAttribute(
      "href",
      this.$root.basepath + "/assets/css/home/login-style.css"
    );
    css.setAttribute("type", "text/css");
    css.setAttribute("rel", "stylesheet");
    document.head.appendChild(css);

    css = document.createElement("link");
    css.setAttribute(
      "href",
      this.$root.basepath + "/assets/css/home/others.css"
    );
    css.setAttribute("type", "text/css");
    css.setAttribute("rel", "stylesheet");
    document.head.appendChild(css);

    css = document.createElement("link");
    css.setAttribute(
      "href",
      this.$root.basepath + "/assets/css/home/custom.css"
    );
    css.setAttribute("type", "text/css");
    css.setAttribute("rel", "stylesheet");
    document.head.appendChild(css);

    var js = document.createElement("script");
    js.setAttribute(
      "src",
      "//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"
    );
    js.setAttribute("async", true);
    document.body.appendChild(js);
  },
  beforeMount() {
    var js = document.createElement("script");
    js.setAttribute(
      "src",
      this.$root.basepath + "/assets/js/home/jquery.min.js"
    );
    js.setAttribute("async", true);
    document.body.appendChild(js);
    js = document.createElement("script");
    js.setAttribute(
      "src",
      this.$root.basepath + "/assets/js/home/bootstrap.bundle.min.js"
    );
    document.body.appendChild(js);
  },
    methods: {
        requestResetPassword() {
            // this.$root.loader('show')
        if (this.phrase) {
              this.$root.alert('error', " ", 'Please choose a different type of recovery option')
      
        }
            this.processing(true)
            this.formDefault()
            this.$http.post("/auth/reset-password", { email: this.email }).then(result => {
                this.$root.loader('hide')
                this.$root.scrollUp()
                this.processing(false)
                this.response = result.data
                this.success = true
                // console.log(result.data)
            }, error => {
                this.$root.loader('hide')
                this.$root.scrollUp()
                this.processing(false)
                this.has_error = true
                // console.error(error.response)
                this.errors = error.response.data
            });
        },
        processing(status) {
            if (status) {
                this.$refs.process.value = "processing..."
                this.$refs.process.disabled = true
            } else {
                this.$refs.process.value = "Send Reset Link"
                this.$refs.process.disabled = false
            }
        },
        formDefault(){
            this.success = false
            this.errors = ""
            this.response = ""
            this.has_error = false
      },

      chooseResetOption(option) {
        if (this.reset_option == option)
          this.reset_option = ''
        else {
          this.reset_option = option
        }
      }
    }
}

</script>

