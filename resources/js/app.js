import './bootstrap';
import '../fomantic/dist/semantic.min'

$(document).ready(function () {
  initComponents();
});

function initComponents() {
  $('#nav-section').visibility({
    once: false,
    onBottomPassed: function () {
      $('#attached-navbar').transition('fade in');
    },
    onBottomPassedReverse: function () {
      $('#attached-navbar').transition('fade out');
    }
  });

  $('.ui.dropdown').dropdown();
  $('.ui.selection.dropdown').dropdown({
    selectOnKeydown: false,
    ignoreDiacritics: true,
    sortSelect: true,
    fullTextSearch: 'exact',
    message: {
      addResult: 'Añadir <b>{term}</b>',
      count: '{count} seleccionado(s)',
      maxSelections: '{maxCount} selecciones máx',
      noResults: 'Sin results.'
    }
  });

  $('.ui.checkbox').checkbox();

  $("[type='password']").closest('.field').find('.ui.toggle').state({
    text: {
      active: '<i class="eye slash outline icon"></i>',
      inactive: '<i class="eye outline icon"></i>'
    },
    className: {
      active: 'red'
    },
    onChange: function () {
      var passwordField = $(this).closest('.field').find('input');

      if (passwordField.attr('type') === 'password') {
        passwordField.attr('type', 'text').focus();
      } else {
        passwordField.attr('type', 'password').focus();
      }
    }
  });
}