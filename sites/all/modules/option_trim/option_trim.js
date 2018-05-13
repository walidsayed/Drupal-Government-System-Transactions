function populate_field2(parent) {
  (function ($) {
    var clear = true;
    for (var i in option_trim_json[parent]) {
      $("#edit-field2").selectOptions(option_trim_json[parent][i], clear);
      clear = false;
    }
    if (clear == true) {
      // Clear all selected options.
      $("#edit-field2 option:selected").removeAttr("selected");
    }
  })(jQuery);
}

jQuery(document).ready(function($) {
  $("#edit-field1").change();
});