/**
 * Adds functionality to collapse the menu when viewing on a mobile device
 * Author: Ryan Frahm
 * Date: 8/11/14
 */

(function($) {
  Drupal.behaviors.suitcaseBlockSearch = {
    attach: function (context) {
      $('body', context).once('suitcaseBlockSearch', function() {
        $('.block .item-list').each(function() {
          var $e = $('<div class="block-search"><input type="text" value=""></div>');
          $e.find('input').keyup(function(e) {
            $(this).parent().parent().find('li:not(:contains('+$(this).val()+'))').hide();
            $(this).parent().parent().find('li:contains('+$(this).val()+')').show();
          });
          $(this).prepend($e);
        });
      });
    }
  };
})(jQuery);