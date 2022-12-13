
jQuery(document).ready(() => {
     $(function () {
       "use strict";
       $("#phoneInput").letteringInput({
         inputClass: "letter",
         onLetterKeyup: function ($item, event) {
        //    console.log("$item:", $item);
        //    console.log("event:", event);
         },
         onSet: function ($el, event, value) {
        //    console.log("element:", $el);
        //    console.log("event:", event);
        //    console.log("value:", value);
         },
       });
     });
})