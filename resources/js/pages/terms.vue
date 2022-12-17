<script>
export default {
    data() {
        return {
            company: this.domain,
            domain: this.$root.appDomain,
        };
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
            this.$root.basepath + "/assets/js/home/bootstrap.min.js"
        );
        document.body.appendChild(js);
    },
};
</script>
<template>
    <div class="page-wraper">
        <HomeHeader :domain="domain"></HomeHeader>
        <div class="no-bottom no-top" id="content">
   <div id="top"></div>
   <!-- section begin -->
   <section aria-label="section" data-bgimage="url(assets/images/home/bg2.jpg) top" class="text-light" id="subheader">
      <div class="center-y relative text-center">
         <div class="container">
            <div class="row">
               <div class="col text-center">
                  <div class="spacer-single"></div>
                  <h1 style="color:#FFCC29;">Our Terms</h1>
                  <p>Terms & Conditions guiding the program</p>
               </div>
               <div class="clearfix"></div>
            </div>
         </div>
      </div>
   </section>
   <!-- section close -->
   <section aria-label="section" data-bgcolor="var(--secondary_color)">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-md-12 whited">
               <h3 class="orange">By investing with us you thereby agree to the following:</h3>
               To be of legal age in your country to partake in this program, and in all the cases your minimal age must be 18 years.<br><br>
               {{domain}} is not available to the general public and is opened only to the qualified members of {{domain}}, the use of this site is restricted to our members and to individuals personally invited by them. Every deposit is considered to be a private transaction between the {{domain}} and its Member.<br><br>
               As a private transaction, this program is exempt from the US Securities Act of 1933, the US Securities Exchange Act of 1934 and the US Investment Company Act of 1940 and all other rules, regulations and amendments thereof. We are not FDIC insured. We are not a licensed bank or a security firm.<br><br>
               You agree that all information, communications, materials coming from {{domain}} are unsolicited and must be kept private, confidential and protected from any disclosure. Moreover, the information, communications and materials contained herein are not to be regarded as an offer, nor a solicitation for investments in any jurisdiction which deems non-public offers or solicitations unlawful, nor to any person to whom it will be unlawful to make such offer or solicitation.<br><br>
               All the data giving by a member to {{domain}} will be only privately used and not disclosed to any third parties. {{domain}} is not responsible or liable for any loss of data.<br><br>
               You agree to hold all principals and members harmless of any liability. You are investing at your own risk and you agree that a past performance is not an explicit guarantee for the same future performance. You agree that all information, communications and materials you will find on this site are intended to be regarded as an informational and educational matter and not an investment advice.<br><br>
               You agree to execute all financial transactions solely at your own discretion and your own risk. You personally determine the size and term of your deposit. <br><br>
               We reserve the right to change the rules, commissions and rates of the program at any time and at our sole discretion without notice, especially in order to respect the integrity and security of the members' interests. You agree that it is your sole responsibility to review the current terms.<br><br>
               {{domain}} is not responsible or liable for any damages, losses and costs resulting from any violation of the conditions and terms and/or use of our website by a member. You guarantee to {{domain}} that you will not use this site in any illegal way and you agree to respect your local, national and international laws.<br><br>
               Don't post bad vote on Public Forums and at Gold Rating Site without contacting the administrator of our program FIRST. Maybe there was a technical problem with your transaction, so please always CLEAR the thing with the administrator.<br><br>
               We will not tolerate SPAM or any type of UCE in this program. SPAM violators will be immediately and permanently removed from the program.<br><br>
               {{domain}} reserves the right to accept or decline any member for membership without explanation.<br><br>
               If you do not agree with the above disclaimer, please do not go any further.<br><br>
            </div>
         </div>
      </div>
   </section>
</div>

        <HomeFooter :company="company" :domain="domain"></HomeFooter>
    </div>
</template>

<style scoped>
.whited{
      color:#fff;
      }
      .orange{
      color:#FFCC29;
      }
</style>
