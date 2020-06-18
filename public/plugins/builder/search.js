(function () {
  var input = document.querySelector('#mega-search');
  var client = algoliasearch('9M3AVPH0VQ', '13316b1a45a6772795b5fc0d5f2de1e9');
  var searchOption = { hitsPerPage: 5 };
  var postsIndex = client.initIndex('faq_questions');
  var search = autocomplete('#mega-search', { hint: false }, [
    {
      source: autocomplete.sources.hits(postsIndex, searchOption),
      templates: {
        suggestion: function(suggestion) {
          return '<a href="/pages/' + suggestion.slug + '" ' + getTarget() + '>' +
            getTitle(suggestion) +
            getSubtitle(suggestion) +
            '</a>';
        },
      }
    }
  ]);

  function getTarget(input) {
    if (!$('#mega-search').data('target')) {
      return '';
    }
    return 'target="_blank"';
  }

  function getTitle(suggestion) {
    if (!suggestion.question_text) {
      return '';
    }
    return '<span class="suggestion-title">' + suggestion._highlightResult.question_text.value + '</span>';
  }

  function getSubtitle(suggestion) {
    if (!suggestion.answer_text) {
      return '';
    }
    return '<br />' + suggestion._highlightResult.answer_text.value.replace(/(<([^>]+)>)/ig,"").substring(0, 100) + '...';
  }

  search.on('autocomplete:updated', function (e) {
    var dropDown = input.parentElement.querySelector('.aa-dropdown-menu');
    var oldFooter = dropDown.querySelector('[data-search-footer]');
    if (oldFooter) {
      oldFooter.remove();
    }

    var newFooter = '';
    var suggestionsCount = dropDown.querySelectorAll('.aa-suggestion').length;
    if (suggestionsCount <= 0) {
      dropDown.style.display = 'inline-block';
      newFooter = '<div class="search-no-results" data-search-footer>No results found</div>';
    }
    dropDown.insertAdjacentHTML('beforeend', newFooter);
  });
})();
