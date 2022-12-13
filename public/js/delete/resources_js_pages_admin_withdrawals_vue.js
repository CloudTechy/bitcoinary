"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_pages_admin_withdrawals_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/withdrawals.vue?vue&type=script&lang=js&":
/*!*******************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/withdrawals.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var moment__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! moment */ "./node_modules/moment/moment.js");
/* harmony import */ var moment__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(moment__WEBPACK_IMPORTED_MODULE_0__);
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
      from: '',
      to: '',
      search: '',
      withdrawals: '',
      form: new Form({}),
      withdrawal: null
    };
  },
  mounted: function mounted() {
    if (localStorage.withdrawals) {
      this.withdrawals = JSON.parse(localStorage.withdrawals);
    }

    if (this.$route.query.username) {
      this.search = this.$route.query.username;
    }

    setInterval(this.getWithdrawals, 45000);
    this.getWithdrawals();
  },
  computed: {
    user: function user() {
      return this.$auth.user();
    },
    withdrawalsx: function withdrawalsx() {
      return this.withdrawals;
    }
  },
  beforeCreate: function beforeCreate() {
    if (this.$auth.user().isAdmin == false) {
      this.$auth.logout();
    }
  },
  methods: {
    getWithdrawals: function getWithdrawals() {
      var _this = this;

      this.form.get("auth/withdrawals").then(function (response) {
        _this.withdrawals = response.data.data.item;
        localStorage.withdrawals = JSON.stringify(response.data.data.item);
      })["catch"](function (error) {
        console.log(error.response);
      });
    },
    createDate: function createDate(_createDate) {
      return moment__WEBPACK_IMPORTED_MODULE_0___default()(_createDate).format("MMM Do YYYY");
    },
    myFilter: function myFilter(list, fromDate, toDate) {
      var _this2 = this;

      var data = [];

      if (fromDate) {
        data = list.filter(function (item) {
          var keys = [];
          keys.push(item.created_at);
          var _boolean = false;

          if (item == undefined) {
            return false;
          }

          var bool = keys.forEach(function (item) {
            var created_at = new (moment__WEBPACK_IMPORTED_MODULE_0___default())(item);
            var fromDate = _this2.from != '' ? new (moment__WEBPACK_IMPORTED_MODULE_0___default())(_this2.from.toString()) : new (moment__WEBPACK_IMPORTED_MODULE_0___default())().subtract(1, 'd');
            var toDate = _this2.to != '' ? new (moment__WEBPACK_IMPORTED_MODULE_0___default())(_this2.to.toString()).add(1, 'd') : new (moment__WEBPACK_IMPORTED_MODULE_0___default())().add(1, 'd');

            if (created_at != null && fromDate <= created_at && toDate >= created_at) {
              _boolean = true;
            }
          });
          return _boolean;
        });
      } else {
        data = list;
      }

      return data;
    },
    approve: function approve(withdrawal, index) {
      var _this3 = this;

      if (!withdrawal.approved) {
        this.$swal({
          title: "Do you want to approve ".concat(withdrawal.username, " request of $").concat(withdrawal.amount, "?"),
          text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#38c172',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, approve withdrawal'
        }).then(function (result) {
          if (result.value == true) {
            _this3.form.get("/auth/confirm_withdrawal/" + withdrawal.id).then(function (response) {
              _this3.$root.alert('success', ' ', 'Withdrawal approved successfully');

              _this3.getWithdrawals();
            })["catch"](function (error) {
              var status = withdrawal.approved ? _this3.$refs.withdrawal[index].classList.add('active') : _this3.$refs.withdrawal[index].classList.remove('active');

              _this3.$root.alert('error', ' ', 'Withdrawal could not be approved, try again');

              _this3.getWithdrawals();

              console.log(error.response);
            });
          } else {
            var status = withdrawal.approved ? _this3.$refs.withdrawal[index].classList.add('active') : _this3.$refs.withdrawal[index].classList.remove('active'); // this.$refs.withdrawal[index].classList.remove('active')

            _this3.$root.alert('info', ' ', 'Withdrawal dismissed successfully');
          }
        });
      } else {
        this.$root.alert('info', ' ', 'Please note that withdrawal can only be approved');
      }
    },
    loadUploadPop: function loadUploadPop(item) {
      this.$root.uploadItem = {
        title: "Upload $".concat(item.amount, "  POP for ").concat(item.username),
        url: 'auth/pop',
        id: item.id
      };
    },
    refreshWithdrawal: function refreshWithdrawal() {
      this.getWithdrawals();
      this.$root.uploadItem = null;
    },
    loadViewPOP: function loadViewPOP(item) {
      this.$root.viewItem = {
        title: "Viewing $".concat(item.amount, "  POP for ").concat(item.username),
        imgUrl: item.pop
      };
    },
    resetViewModal: function resetViewModal() {
      this.$root.viewItem = null;
    }
  }
});

/***/ }),

/***/ "./resources/js/pages/admin/withdrawals.vue":
/*!**************************************************!*\
  !*** ./resources/js/pages/admin/withdrawals.vue ***!
  \**************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _withdrawals_vue_vue_type_template_id_14996685___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./withdrawals.vue?vue&type=template&id=14996685& */ "./resources/js/pages/admin/withdrawals.vue?vue&type=template&id=14996685&");
/* harmony import */ var _withdrawals_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./withdrawals.vue?vue&type=script&lang=js& */ "./resources/js/pages/admin/withdrawals.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _withdrawals_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _withdrawals_vue_vue_type_template_id_14996685___WEBPACK_IMPORTED_MODULE_0__.render,
  _withdrawals_vue_vue_type_template_id_14996685___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/pages/admin/withdrawals.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/pages/admin/withdrawals.vue?vue&type=script&lang=js&":
/*!***************************************************************************!*\
  !*** ./resources/js/pages/admin/withdrawals.vue?vue&type=script&lang=js& ***!
  \***************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_withdrawals_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./withdrawals.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/withdrawals.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_withdrawals_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/pages/admin/withdrawals.vue?vue&type=template&id=14996685&":
/*!*********************************************************************************!*\
  !*** ./resources/js/pages/admin/withdrawals.vue?vue&type=template&id=14996685& ***!
  \*********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_withdrawals_vue_vue_type_template_id_14996685___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_withdrawals_vue_vue_type_template_id_14996685___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_withdrawals_vue_vue_type_template_id_14996685___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./withdrawals.vue?vue&type=template&id=14996685& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/withdrawals.vue?vue&type=template&id=14996685&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/withdrawals.vue?vue&type=template&id=14996685&":
/*!************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/withdrawals.vue?vue&type=template&id=14996685& ***!
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
  return _c(
    "div",
    { staticClass: "m-0 p-0" },
    [
      _c("AdminDashboardHeader"),
      _vm._v(" "),
      _c("section", { staticClass: "main-container m-lg-3 m-0 acc" }, [
        _c("div", { staticClass: "main" }, [
          _c("div", { staticClass: "container" }, [
            _c(
              "div",
              {
                staticClass: "wrapper",
                style:
                  "background:url(" +
                  _vm.$root.basepath +
                  "/img/home.png) no-repeat 0 0;min-height:400px;",
              },
              [
                _c(
                  "div",
                  { staticClass: "account-wrapper m-xl-2 row m-0" },
                  [
                    _c(
                      "nav",
                      {
                        staticClass:
                          "nav navbar-dark ml-4 ml-lg-0 mb-3 mb-lg-b p-0 mt-3 navbar navbar-expand-lg",
                      },
                      [
                        _c(
                          "button",
                          {
                            staticClass: "navbar-toggler",
                            attrs: {
                              type: "button",
                              "data-toggle": "collapse",
                              "data-target": "#collapsibleNavbar4",
                            },
                            on: { click: function ($event) {} },
                          },
                          [_c("span", { staticClass: "navbar-toggler-icon" })]
                        ),
                      ]
                    ),
                    _vm._v(" "),
                    _c("AdminDashboardSidebar"),
                    _vm._v(" "),
                    _c(
                      "div",
                      {
                        staticClass:
                          "columns col-xl-9 p-0 pl-lg-2 col-lg-9 col-12 main-acc",
                      },
                      [
                        _c("div", { staticClass: "acc-block" }, [
                          _c("div", { staticClass: "acc-heading clearfix" }, [
                            _c("h2", [_vm._v("Withdrawals")]),
                            _vm._v(" "),
                            _c("ul", { staticClass: "breadcrumbs" }, [
                              _c("li", [_vm._v("Main")]),
                              _vm._v(" "),
                              _c("li", [
                                _c("img", {
                                  attrs: {
                                    src:
                                      _vm.$root.basepath + "/img/right-b.png",
                                  },
                                }),
                              ]),
                              _vm._v(" "),
                              _c("li", { staticClass: "active" }, [
                                _vm._v("Withdrawals"),
                              ]),
                            ]),
                          ]),
                          _vm._v(" "),
                          _c(
                            "div",
                            { staticClass: "acc-body m-0 p-2 Withdrawals" },
                            [
                              _c(
                                "form",
                                {
                                  staticClass: "date-from",
                                  attrs: { method: "post", name: "opts" },
                                  on: {
                                    submit: function ($event) {
                                      $event.preventDefault()
                                      return _vm.getWithdrawals.apply(
                                        null,
                                        arguments
                                      )
                                    },
                                  },
                                },
                                [
                                  _c(
                                    "div",
                                    {
                                      staticClass:
                                        "row text-center justify-content-center form-list",
                                    },
                                    [
                                      _c(
                                        "div",
                                        { staticClass: "form-group col-6" },
                                        [
                                          _c("label", [_vm._v("From")]),
                                          _vm._v(" "),
                                          _c("div", { staticClass: "iconed" }, [
                                            _vm._m(0),
                                            _vm._v(" "),
                                            _c("input", {
                                              directives: [
                                                {
                                                  name: "model",
                                                  rawName: "v-model",
                                                  value: _vm.from,
                                                  expression: "from",
                                                },
                                              ],
                                              staticClass: "form-control",
                                              attrs: {
                                                type: "date",
                                                placeholder: "select from date",
                                              },
                                              domProps: { value: _vm.from },
                                              on: {
                                                input: function ($event) {
                                                  if ($event.target.composing) {
                                                    return
                                                  }
                                                  _vm.from = $event.target.value
                                                },
                                              },
                                            }),
                                          ]),
                                        ]
                                      ),
                                      _vm._v(" "),
                                      _c(
                                        "div",
                                        { staticClass: "form-group col-6" },
                                        [
                                          _c("label", [_vm._v("To")]),
                                          _vm._v(" "),
                                          _c("div", { staticClass: "iconed" }, [
                                            _vm._m(1),
                                            _vm._v(" "),
                                            _c("input", {
                                              directives: [
                                                {
                                                  name: "model",
                                                  rawName: "v-model",
                                                  value: _vm.to,
                                                  expression: "to",
                                                },
                                              ],
                                              staticClass: "form-control",
                                              attrs: {
                                                type: "date",
                                                placeholder: "select to date",
                                                required: "",
                                              },
                                              domProps: { value: _vm.to },
                                              on: {
                                                input: function ($event) {
                                                  if ($event.target.composing) {
                                                    return
                                                  }
                                                  _vm.to = $event.target.value
                                                },
                                              },
                                            }),
                                          ]),
                                        ]
                                      ),
                                      _vm._v(" "),
                                      _c(
                                        "div",
                                        { staticClass: "form-group col-12" },
                                        [
                                          _c(
                                            "div",
                                            { staticClass: "p-2 m-2" },
                                            [
                                              _c(
                                                "div",
                                                {
                                                  staticClass:
                                                    "dataTables_filter",
                                                  attrs: {
                                                    id: "example1_filter",
                                                  },
                                                },
                                                [
                                                  _c("label", [
                                                    _vm._v("Search:"),
                                                    _c("input", {
                                                      directives: [
                                                        {
                                                          name: "model",
                                                          rawName: "v-model",
                                                          value: _vm.search,
                                                          expression: "search",
                                                        },
                                                      ],
                                                      staticClass:
                                                        "form-control form-control-lg",
                                                      attrs: {
                                                        type: "search",
                                                        placeholder: "search",
                                                      },
                                                      domProps: {
                                                        value: _vm.search,
                                                      },
                                                      on: {
                                                        input: function (
                                                          $event
                                                        ) {
                                                          if (
                                                            $event.target
                                                              .composing
                                                          ) {
                                                            return
                                                          }
                                                          _vm.search =
                                                            $event.target.value
                                                        },
                                                      },
                                                    }),
                                                  ]),
                                                ]
                                              ),
                                            ]
                                          ),
                                        ]
                                      ),
                                    ]
                                  ),
                                ]
                              ),
                              _vm._v(" "),
                              _c("h4", { staticClass: "text-center" }, [
                                _vm._v("List of all Withdrawals"),
                              ]),
                              _vm._v(" "),
                              _c("p", { staticClass: "small p-2" }, [
                                _vm._v(
                                  "Total of " +
                                    _vm._s(
                                      _vm.myFilter(
                                        _vm.$root.myFilter(
                                          _vm.withdrawals,
                                          _vm.search
                                        ),
                                        _vm.from,
                                        _vm.to
                                      ).length
                                    ) +
                                    " entries"
                                ),
                              ]),
                              _vm._v(" "),
                              _c(
                                "div",
                                {
                                  staticClass:
                                    "stat-table m-0 p-0 table-responsive",
                                  staticStyle: {
                                    "max-height": "500px",
                                    overflow: "auto",
                                  },
                                },
                                [
                                  _c("table", { staticClass: "stat" }, [
                                    _vm._m(2),
                                    _vm._v(" "),
                                    _c(
                                      "tbody",
                                      [
                                        _vm._l(
                                          _vm.myFilter(
                                            _vm.$root.myFilter(
                                              _vm.withdrawalsx,
                                              _vm.search
                                            ),
                                            _vm.from,
                                            _vm.to
                                          ),
                                          function (withdrawal, index) {
                                            return _vm.user
                                              ? _c("tr", [
                                                  _c(
                                                    "td",
                                                    {
                                                      staticClass:
                                                        "text-center",
                                                    },
                                                    [
                                                      _vm._v(
                                                        _vm._s(
                                                          withdrawal.username
                                                        )
                                                      ),
                                                    ]
                                                  ),
                                                  _vm._v(" "),
                                                  _c(
                                                    "td",
                                                    {
                                                      staticClass:
                                                        "text-center",
                                                    },
                                                    [
                                                      _vm._v(
                                                        "$" +
                                                          _vm._s(
                                                            _vm.$root.normalNumeral(
                                                              withdrawal.amount
                                                            )
                                                          )
                                                      ),
                                                    ]
                                                  ),
                                                  _vm._v(" "),
                                                  _c(
                                                    "td",
                                                    {
                                                      staticClass:
                                                        "text-center",
                                                    },
                                                    [
                                                      _c(
                                                        "button",
                                                        {
                                                          ref: "withdrawal",
                                                          refInFor: true,
                                                          class: {
                                                            btn: true,
                                                            "btn-sm": true,
                                                            "btn-toggle": true,
                                                            active:
                                                              withdrawal.approved,
                                                          },
                                                          attrs: {
                                                            type: "button",
                                                            "data-toggle":
                                                              "button",
                                                            "aria-pressed":
                                                              withdrawal.approved,
                                                            autocomplete: "off",
                                                          },
                                                          on: {
                                                            click: function (
                                                              $event
                                                            ) {
                                                              $event.preventDefault()
                                                              return _vm.approve(
                                                                withdrawal,
                                                                index
                                                              )
                                                            },
                                                          },
                                                        },
                                                        [
                                                          _c("div", {
                                                            staticClass:
                                                              "handle",
                                                          }),
                                                        ]
                                                      ),
                                                    ]
                                                  ),
                                                  _vm._v(" "),
                                                  _c(
                                                    "td",
                                                    {
                                                      staticClass:
                                                        "text-center",
                                                    },
                                                    [
                                                      _vm._v(
                                                        _vm._s(
                                                          _vm.createDate(
                                                            withdrawal.created_at
                                                          )
                                                        )
                                                      ),
                                                    ]
                                                  ),
                                                  _vm._v(" "),
                                                  _c(
                                                    "td",
                                                    {
                                                      staticClass:
                                                        "text-center",
                                                    },
                                                    [
                                                      withdrawal.pop
                                                        ? _c(
                                                            "span",
                                                            {
                                                              staticClass:
                                                                "text-success",
                                                            },
                                                            [
                                                              _c(
                                                                "button",
                                                                {
                                                                  staticClass:
                                                                    "text-center btn btn-link m-1",
                                                                  staticStyle: {
                                                                    "text-decoration":
                                                                      "none",
                                                                  },
                                                                  attrs: {
                                                                    title:
                                                                      "view pop",
                                                                    type: "button",
                                                                    "data-toggle":
                                                                      "modal",
                                                                    "data-target":
                                                                      "#viewPopModal",
                                                                  },
                                                                  on: {
                                                                    click:
                                                                      function (
                                                                        $event
                                                                      ) {
                                                                        return _vm.loadViewPOP(
                                                                          withdrawal
                                                                        )
                                                                      },
                                                                  },
                                                                },
                                                                [
                                                                  _c("i", {
                                                                    staticClass:
                                                                      "text-success fas fa-eye",
                                                                  }),
                                                                ]
                                                              ),
                                                              _vm._v(" "),
                                                              _c(
                                                                "button",
                                                                {
                                                                  staticClass:
                                                                    "text-center btn btn-link m-1",
                                                                  staticStyle: {
                                                                    "text-decoration":
                                                                      "none",
                                                                  },
                                                                  attrs: {
                                                                    title:
                                                                      "replace POP",
                                                                    type: "button",
                                                                    "data-toggle":
                                                                      "modal",
                                                                    "data-target":
                                                                      "#uploadPopModal",
                                                                  },
                                                                  on: {
                                                                    click:
                                                                      function (
                                                                        $event
                                                                      ) {
                                                                        return _vm.loadUploadPop(
                                                                          withdrawal
                                                                        )
                                                                      },
                                                                  },
                                                                },
                                                                [
                                                                  _c("i", {
                                                                    staticClass:
                                                                      "text-white fas fa-upload",
                                                                  }),
                                                                ]
                                                              ),
                                                            ]
                                                          )
                                                        : _c("span", [
                                                            _c(
                                                              "button",
                                                              {
                                                                ref: "popModal",
                                                                refInFor: true,
                                                                staticClass:
                                                                  "text-center btn btn-link m-1",
                                                                staticStyle: {
                                                                  "text-decoration":
                                                                    "none",
                                                                },
                                                                attrs: {
                                                                  type: "button",
                                                                  "data-toggle":
                                                                    "modal",
                                                                  "data-target":
                                                                    "#uploadPopModal",
                                                                },
                                                                on: {
                                                                  click:
                                                                    function (
                                                                      $event
                                                                    ) {
                                                                      return _vm.loadUploadPop(
                                                                        withdrawal
                                                                      )
                                                                    },
                                                                },
                                                              },
                                                              [
                                                                _c("i", {
                                                                  staticClass:
                                                                    "text-danger fas fa-upload",
                                                                }),
                                                              ]
                                                            ),
                                                          ]),
                                                    ]
                                                  ),
                                                  _vm._v(" "),
                                                  _c(
                                                    "td",
                                                    {
                                                      staticClass:
                                                        "text-center",
                                                    },
                                                    [
                                                      _vm._v(
                                                        _vm._s(
                                                          withdrawal.reference
                                                        )
                                                      ),
                                                    ]
                                                  ),
                                                ])
                                              : _vm._e()
                                          }
                                        ),
                                        _vm._v(" "),
                                        _vm
                                          .myFilter(
                                            _vm.$root.myFilter(
                                              _vm.withdrawalsx,
                                              _vm.search
                                            ),
                                            _vm.from,
                                            _vm.to
                                          )
                                          .slice(0, 20).length == 0
                                          ? _c("tr", [
                                              _c(
                                                "th",
                                                {
                                                  staticClass: "p-4",
                                                  staticStyle: {
                                                    "text-align": "center",
                                                  },
                                                  attrs: {
                                                    colspan: "6",
                                                    align: "center",
                                                  },
                                                },
                                                [
                                                  _vm._v(
                                                    "No withdrawals found."
                                                  ),
                                                ]
                                              ),
                                            ])
                                          : _vm._e(),
                                        _vm._v(" "),
                                        _vm.withdrawals
                                          ? _c(
                                              "tr",
                                              { staticClass: "mt-4 p-2 m-2" },
                                              [
                                                _c(
                                                  "td",
                                                  {
                                                    staticClass:
                                                      "font-weight-bold",
                                                  },
                                                  [_vm._v("Total:")]
                                                ),
                                                _vm._v(" "),
                                                _c(
                                                  "td",
                                                  {
                                                    staticClass:
                                                      "font-weight-bold text-success",
                                                    attrs: {
                                                      colspan: "5",
                                                      align: "right",
                                                    },
                                                  },
                                                  [
                                                    _c("b", [
                                                      _vm._v(
                                                        _vm._s(
                                                          _vm.$root.numeral(
                                                            _vm
                                                              .myFilter(
                                                                _vm.$root.myFilter(
                                                                  _vm.withdrawals,
                                                                  _vm.search
                                                                ),
                                                                _vm.from,
                                                                _vm.to
                                                              )
                                                              .sum("amount")
                                                          )
                                                        )
                                                      ),
                                                    ]),
                                                  ]
                                                ),
                                              ]
                                            )
                                          : _vm._e(),
                                      ],
                                      2
                                    ),
                                  ]),
                                ]
                              ),
                            ]
                          ),
                        ]),
                      ]
                    ),
                  ],
                  1
                ),
                _vm._v(" "),
                _vm.$root.uploadItem
                  ? _c(
                      "div",
                      {
                        staticClass: "modal fade",
                        attrs: { id: "uploadPopModal" },
                      },
                      [
                        _c("pop-component", {
                          on: {
                            popUploaded: _vm.refreshWithdrawal,
                            PopModalClosed: _vm.refreshWithdrawal,
                          },
                        }),
                      ],
                      1
                    )
                  : _vm._e(),
                _vm._v(" "),
                _vm.$root.viewItem
                  ? _c(
                      "div",
                      {
                        staticClass: "modal fade",
                        attrs: { id: "viewPopModal" },
                      },
                      [
                        _c("view-component", {
                          on: { viewModalClosed: _vm.resetViewModal },
                        }),
                      ],
                      1
                    )
                  : _vm._e(),
              ]
            ),
          ]),
        ]),
      ]),
    ],
    1
  )
}
var staticRenderFns = [
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("span", { staticClass: "icon" }, [
      _c("i", {
        staticClass: "fas fa-calendar",
        attrs: { "aria-hidden": "true" },
      }),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("span", { staticClass: "icon" }, [
      _c("i", {
        staticClass: "fas fa-calendar",
        attrs: { "aria-hidden": "true" },
      }),
    ])
  },
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("thead", [
      _c("tr", [
        _c("th", { staticClass: "text-center" }, [_vm._v("Username")]),
        _vm._v(" "),
        _c("th", { staticClass: "text-center" }, [_vm._v("Payment")]),
        _vm._v(" "),
        _c("th", { staticClass: "text-center" }, [_vm._v("Remitted")]),
        _vm._v(" "),
        _c("th", { staticClass: "text-center" }, [_vm._v("Date")]),
        _vm._v(" "),
        _c("th", { staticClass: "text-center" }, [_vm._v(" POP ")]),
        _vm._v(" "),
        _c("th", { staticClass: "text-center" }, [_vm._v("Reference")]),
      ]),
    ])
  },
]
render._withStripped = true



/***/ })

}]);