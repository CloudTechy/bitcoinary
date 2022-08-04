<template>
  <div class="main">
    <h1>
      <div
        class="sitelogo"
        style="background: rgba(1, 0, 21, 0.66); padding: 15px 0 5px"
      >
        <a href="/"
          ><img
            :src= '$root.basepath + "/assets/images/logo2.png"'
            width="230"
            height=""
            alt="site logo"
        /></a>
      </div>
    </h1>
    <div class="w3_agile_main_grids">
      <form
        method="POST"
        class="agile_form"
        autocomplete="off" @submit.prevent="requestResetPassword"
      >
      
        <div class="row">
             <div class="col-12">
                                        <div class="alert alert-danger  mb-3" v-if="has_error && !success  ">
                                            <p class="m-sm-1" v-if="errors.error.email" v-for="error in errors.error.email">{{error}}</p>
                                            <p v-if = "errors.error && typeof errors.error == 'string' " class="text-center m-sm-1">{{errors.message || errors.error}}</p>
                                        </div>
                                        <div class="alert alert-success " v-if="success && !has_error">
                                             <p class="m-sm-1" v-if="response != undefined">{{response.message == "The selected email is invalid." ? "Invalid email" : response.message}}</p>
                                        </div>
                                    </div>
          <h3 class="col-sm-12 col-md-12">Reset Password</h3>
         
          <div class="col-md-6 col-sm-12 form-group">
            <div class="wthree_input">
              <i class="fa fa-user" aria-hidden="true"></i>
              <input type="email" placeholder="Enter email address" required="" v-model="email" class="form-control">
                                    
            </div>
          </div>
          <div class="col-md-6 col-sm-12 form-group">
            <div class="wthree_input">
                <button ref="process" type="submit" class="cbtn btn-primary agileinfo_primary submit">Send Reset Link</button>
             
            </div>
          </div>
          <div class="clear"></div>
        </div>
      </form>
      <div id="progress">
        Don't have an account? <a class="base--color" href="/register">Register</a>
      </div>
      <div class="mt-5 agileits_copyright">
        <span class="copyrights-text text-white"
          >© {{$root.fullYearTemplate}} <a href="/" class="base--color">{{company }}</a
          >. All rights reserved</span
        >
      </div>
    </div>
  </div>
</template>

<script>
export default {
    data() {
        return {
            email: null,
            has_error: false,
            response: '',
            success: false,
            errors: '',
            company: this.$root.appName,
            domain: this.$root.appDomain,
        }
    },
    created() {
        var css = document.createElement("link");
        css.setAttribute(
            "href",
            this.$root.basepath + "/assets/css/bootstrap.css"
        );
        css.setAttribute("type", "text/css");
        css.setAttribute("rel", "stylesheet");
        document.head.appendChild(css);
        var css = document.createElement("link");
        css.setAttribute(
            "href",
            this.$root.basepath + "/assets/css/stylec31c.css"
        );
        css.setAttribute("type", "text/css");
        css.setAttribute("rel", "stylesheet");
        document.head.appendChild(css);
    },
    methods: {
        requestResetPassword() {
            this.$root.loader('show')
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
                this.$refs.process.innerText = "processing..."
                this.$refs.process.disabled = true
            } else {
                this.$refs.process.innerText = "Send Reset Link"
                this.$refs.process.disabled = false
            }
        },
        formDefault(){
            this.success = false
            this.errors = ""
            this.response = ""
            this.has_error = false
        }
    }
}

</script>

