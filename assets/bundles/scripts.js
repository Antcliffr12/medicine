jQuery("document").ready(function(t){var a=t("[data-dropdown-toggle]");t("body").click(function(a){0===t(a.target).closest(".menu_list__child-menu").length&&(t(".menu_toggle").attr("aria-expanded","false"),t(".menu_toggle").html('<i class="fas fa-angle-down"></i>'),t(".menu_list__child-menu").attr("aria-hidden","true").hide()),0==t(a.target).closest(".search-toggle, #search-box").length&&(t(".search-toggle").attr("aria-expanded","false"),t("#search-box").attr("aria-hidden","true"))}),a.each(function(){1===t(this).data("depth")&&t(this).remove(),t(this).on("click",function(a){a.stopPropagation();var e=t(this).data("dropdown-toggle"),a=t(this).attr("aria-expanded");t(".menu_list__child-menu").not(t(this).siblings(".menu_list__child-menu"))&&(t(".menu_list__child-menu").hide(),t(".menu_toggle").attr("aria-expanded","false"),t(".menu_toggle").html('<i class="fas fa-angle-down"></i>'),t(".menu_list__child-menu").attr("aria-hidden","true").hide()),"false"===a?(t(this).attr("aria-expanded","true"),t(this).html('<i class="fas fa-angle-up"></i>'),t("#"+e).attr("aria-hidden","false").show()):(t(this).attr("aria-expanded","false"),t(this).html('<i class="fas fa-angle-down"></i>'),t("#"+e).attr("aria-hidden","true").hide())})}),t(".search-toggle").on("click",function(){t(this).attr("aria-expanded",function(a,e){return"false"==e}),t("#search-box").attr("aria-hidden",function(a,e){return"true"!=e})});var e=!1;t(".menu-toggle").on("click",function(){e=!e,t(this).attr("aria-expanded",!!e),1==e?t(".nav-menu").addClass("d-block"):t(".nav-menu").removeClass("d-block")})});