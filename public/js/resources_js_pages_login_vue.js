"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_pages_login_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/login.vue?vue&type=script&lang=js&":
/*!*******************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/login.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  data: function data() {
    return {
      email: null,
      password: null,
      success: false,
      has_error: false,
      error: "",
      rememberMe: false,
      redirectTo: "",
      redirectPath: "",
      company: this.$root.appName,
      domain: this.$root.appDomain
    };
  },
  mounted: function mounted() {
    var _this = this;

    this.$root.scrollUp();
    window.addEventListener("beforeunload", function () {
      if (!_this.$auth.user().isEmailVerified) {
        _this.$auth.logout();
      }
    });
  },
  created: function created() {
    var css = document.createElement("link");
    css.setAttribute("href", this.$root.basepath + "/assets/css/bootstrap.css");
    css.setAttribute("type", "text/css");
    css.setAttribute("rel", "stylesheet");
    document.head.appendChild(css);
    var css = document.createElement("link");
    css.setAttribute("href", this.$root.basepath + "/assets/css/stylec31c.css");
    css.setAttribute("type", "text/css");
    css.setAttribute("rel", "stylesheet");
    document.head.appendChild(css);
  },
  methods: {
    login: function login() {
      this.$root.loader("show");
      this.processing(true);
      this.formDefault();
      var redirect = this.$auth.redirect();
      var app = this;
      this.$auth.login({
        data: {
          email: app.email,
          password: app.password
        },
        success: function success(response) {
          window.localStorage.setItem("lbUser", JSON.stringify(app.$auth.user()));
          app.success = true;
          this.$root.alert("success", " ", "Login successful, redirecting..."); // if (redirect && !app.$auth.user().isEmailVerified) {
          // if (redirect.from.path == "/confirm-registration") {
          // app.$router.push(redirect.from.fullPath)
          // }
          // }

          if (app.$auth.user().isEmailVerified) {
            if (redirect) {
              app.redirectTo = redirect.from.name;
              app.redirectPath = redirect.from.path;
            } else if (app.$auth.user().isAdmin) {
              app.redirectTo = "adminDashboard";
              app.redirectPath = "/admin/dashboard";
            } else {
              app.redirectTo = "dashboard";
              app.redirectPath = "/dashboard";
            }

            console.log(app.redirectPath); // app.$router.push({ name: 'adminDashboard' })

            window.location.assign(basepath + app.redirectPath); // app.processing(false)
            // app.$root.loader('hide')
          }
        },
        error: function error(res) {
          app.$root.loader("hide");
          window.scrollTo(0, 180);
          app.processing(false);
          app.has_error = true;
          app.error = res.response ? res.response.data : {}; // app.$root.alert('error', ' ', app.error.error ? app.error.error.error : 'An unknown error has occured, please try again later.')

          console.log(res.response.data.error.error);
        },
        rememberMe: app.rememberMe,
        fetchUser: true
      });
    },
    formDefault: function formDefault() {
      this.success = false;
      this.error = "";
      this.has_error = false;
    },
    processing: function processing(status) {
      if (status) {
        this.$refs.signin.innerText = "Signing in...";
        this.$refs.signin.disabled = true;
      } else {
        this.$refs.signin.innerText = "Login Now";
        this.$refs.signin.disabled = false;
      }
    },
    resendEmail: function resendEmail() {
      var _this2 = this;

      var form = new Form({
        email: this.email,
        password: this.password
      });
      form.get("auth/email/resend/").then(function (response) {
        _this2.$root.alert("success", " ", "Email has been sent");
      })["catch"](function (error) {
        _this2.$root.alert("error", " ", "Email was not sent, try again");

        console.log(error.response);
      });
    }
  }
});

/***/ }),

/***/ "./resources/js/pages/login.vue":
/*!**************************************!*\
  !*** ./resources/js/pages/login.vue ***!
  \**************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _login_vue_vue_type_template_id_780e8960_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./login.vue?vue&type=template&id=780e8960&scoped=true& */ "./resources/js/pages/login.vue?vue&type=template&id=780e8960&scoped=true&");
/* harmony import */ var _login_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./login.vue?vue&type=script&lang=js& */ "./resources/js/pages/login.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _login_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _login_vue_vue_type_template_id_780e8960_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render,
  _login_vue_vue_type_template_id_780e8960_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  "780e8960",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/pages/login.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/pages/login.vue?vue&type=script&lang=js&":
/*!***************************************************************!*\
  !*** ./resources/js/pages/login.vue?vue&type=script&lang=js& ***!
  \***************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_login_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./login.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/login.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_login_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/pages/login.vue?vue&type=template&id=780e8960&scoped=true&":
/*!*********************************************************************************!*\
  !*** ./resources/js/pages/login.vue?vue&type=template&id=780e8960&scoped=true& ***!
  \*********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_login_vue_vue_type_template_id_780e8960_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_login_vue_vue_type_template_id_780e8960_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_login_vue_vue_type_template_id_780e8960_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./login.vue?vue&type=template&id=780e8960&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/login.vue?vue&type=template&id=780e8960&scoped=true&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/login.vue?vue&type=template&id=780e8960&scoped=true&":
/*!************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/login.vue?vue&type=template&id=780e8960&scoped=true& ***!
  \************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function () {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "main" }, [
    _c("h1", [
      _c(
        "div",
        {
          staticClass: "sitelogo",
          staticStyle: {
            background: "rgba(1, 0, 21, 0.66)",
            padding: "15px 0 5px",
          },
        },
        [
          _c("a", { attrs: { href: "/" } }, [
            _c("img", {
              attrs: {
                src: _vm.$root.basepath + "/assets/images/logo2.png",
                width: "230",
                height: "",
                alt: "site logo",
              },
            }),
          ]),
        ]
      ),
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "w3_agile_main_grids" }, [
      _c(
        "form",
        {
          staticClass: "agile_form",
          attrs: { autocomplete: "off", method: "post" },
          on: {
            submit: function ($event) {
              $event.preventDefault()
              return _vm.login.apply(null, arguments)
            },
          },
        },
        [
          _c("div", { staticClass: "form-group" }, [
            _vm.has_error && !_vm.success
              ? _c("div", { staticClass: "alert alert-danger m-2" }, [
                  _vm.error.error
                    ? _c("p", { staticClass: "text-center m-2" }, [
                        _vm._v(
                          "\n                        " +
                            _vm._s(_vm.error.message) +
                            "\n                    "
                        ),
                      ])
                    : _vm._e(),
                ])
              : _vm._e(),
          ]),
          _vm._v(" "),
          _c("h3", [_vm._v("Account Login")]),
          _vm._v(" "),
          _c("div", { staticClass: "row" }, [
            _c("div", { staticClass: "col-md-12 col-sm-12 form-group" }, [
              _c("div", { staticClass: "wthree_input" }, [
                _c("i", {
                  staticClass: "fa fa-envelope",
                  staticStyle: { left: "2%" },
                  attrs: { "aria-hidden": "true" },
                }),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.email,
                      expression: "email",
                    },
                  ],
                  staticClass: "form-control",
                  staticStyle: { width: "100%" },
                  attrs: {
                    type: "email",
                    placeholder: "Enter your email",
                    size: "30",
                    autofocus: "autofocus",
                    required: "",
                  },
                  domProps: { value: _vm.email },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.email = $event.target.value
                    },
                  },
                }),
              ]),
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "col-md-12 col-sm-12 form-group" }, [
              _c("div", { staticClass: "wthree_input" }, [
                _c("i", {
                  staticClass: "fa fa-lock",
                  staticStyle: { left: "2%" },
                  attrs: { "aria-hidden": "true" },
                }),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.password,
                      expression: "password",
                    },
                  ],
                  staticClass: "form-control",
                  staticStyle: { width: "100%" },
                  attrs: {
                    type: "password",
                    size: "30",
                    placeholder: "Enter password",
                    required: "",
                  },
                  domProps: { value: _vm.password },
                  on: {
                    input: function ($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.password = $event.target.value
                    },
                  },
                }),
              ]),
            ]),
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "row form-group" }, [
            _c("div", { staticClass: "col-md-12 col-sm-12" }, [
              _c(
                "button",
                {
                  ref: "signin",
                  staticClass: "btn btn-primary",
                  staticStyle: { "margin-top": "10px", width: "100%" },
                  attrs: { type: "submit" },
                },
                [
                  _vm._v(
                    "\n                        Login Now\n                    "
                  ),
                ]
              ),
            ]),
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "clear" }),
        ]
      ),
      _vm._v(" "),
      _vm._m(0),
      _vm._v(" "),
      _c("div", { staticClass: "mt-5 agileits_copyright" }, [
        _c("span", { staticClass: "copyrights-text text-white" }, [
          _vm._v(
            "© " + _vm._s(_vm.$root.fullYearTemplate) + "\n                "
          ),
          _c("a", { staticClass: "base--color", attrs: { href: "/" } }, [
            _vm._v(_vm._s(_vm.company)),
          ]),
          _vm._v(". All rights reserved"),
        ]),
      ]),
    ]),
  ])
}
var staticRenderFns = [
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "form-row mt-2" }, [
      _c("div", { staticClass: "col-sm-6" }, [
        _c("div", { attrs: { id: "progress" } }, [
          _c("p", { staticClass: "f-size-14" }, [
            _vm._v(
              "\n                        Forgot Password?\n                        "
            ),
            _c(
              "a",
              {
                staticClass: "base--color",
                attrs: { href: "/forgot_password" },
              },
              [_vm._v("Reset Now")]
            ),
          ]),
        ]),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "col-sm-6" }, [
        _c("div", { attrs: { id: "progress" } }, [
          _c("p", { staticClass: "f-size-14" }, [
            _vm._v(
              "\n                        Don't have an account?\n                        "
            ),
            _c(
              "a",
              { staticClass: "base--color", attrs: { href: "/register" } },
              [_vm._v("Sign Up")]
            ),
          ]),
        ]),
      ]),
    ])
  },
]
render._withStripped = true



/***/ })

}]);