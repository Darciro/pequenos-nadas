(function ($) {
    $(document).ready(function () {
        admin.init();
    });

    admin = {
        init: function () {
            this.autoCompleteCity();
            this.autoCompleteCoutry();
        },

        autoCompleteCity: function () {
            var $originalSelect = $('.acf-field[data-name="city"] select'),
                $inputSelector = $( '#acf-cities-selector-input' ),
                citiesList = $originalSelect.find('option').map(function(){
                    return this.value
                }).get();

            citiesList.splice((citiesList.length-1), 1);

            $originalSelect.hide();
            $inputSelector
                .attr('type', 'text')
                .val($originalSelect.val())
                .autocomplete({
                source: citiesList,
                minLength: 0
            }).focus(function () {
                $(this).autocomplete('search', $(this).val());
            });

            $inputSelector.on( 'autocompleteselect', function( event, res ) {
                $originalSelect.val(res.item.value);
            } );

            $inputSelector.on( 'keyup', function() {
                if( $(this).val().length === 0 ) {
                    $('.no-city-found').remove();
                }
            } );

            $inputSelector.on( 'autocompleteresponse', function( event, res ) {
                if( res.content.length === 0 ) {
                    var notice = '<div class="acf-notice -error no-city-found acf-error-message"><p>Cidade não encontrada. <a href="#" class="add-new-city">Criar nova cidade</a></p></div>';
                    if( !$('.no-city-found').length )
                        $inputSelector.before(notice);
                } else {
                    $('.no-city-found').remove();
                }
            } );

            $('body').on('click', '.add-new-city', function (e) {
                e.preventDefault();
                $('.no-city-found').remove();

                var notice = '<div class="acf-notice -error no-city-found acf-error-message"><p><a href="#" class="cancel-new-city">Cancelar criação de nova cidade</a></p></div>';
                if( !$('.no-city-found').length )
                    $inputSelector.before(notice);

                $originalSelect.val('other').trigger('change');
                $inputSelector.hide();
                $('.acf-field[data-name="add_city"] input').val($inputSelector.val());
            });

            $('body').on('click', '.cancel-new-city', function (e) {
                e.preventDefault();
                $('.no-city-found').remove();
                $originalSelect.val('').trigger('change');
                $('.acf-field[data-name="add_city"] input').val('');
                $inputSelector.val('').show();
            });
        },

        autoCompleteCoutry: function () {
            var $originalSelect = $('.acf-field[data-name="country"] select'),
                $inputSelector = $( '#acf-countries-selector-input' ),
                countriesList = $originalSelect.find('option').map(function(){
                    return this.value
                }).get();

            countriesList.splice((countriesList.length-1), 1);

            $originalSelect.hide();
            $inputSelector
                .attr('type', 'text')
                .val($originalSelect.val())
                .autocomplete({
                source: countriesList,
                minLength: 0
            }).focus(function () {
                $(this).autocomplete('search', $(this).val());
            });

            $inputSelector.on( 'autocompleteselect', function( event, res ) {
                $originalSelect.val(res.item.value);
            } );

            $inputSelector.on( 'keyup', function() {
                if( $(this).val().length === 0 ) {
                    $('.no-country-found').remove();
                }
            } );

            $inputSelector.on( 'autocompleteresponse', function( event, res ) {
                if( res.content.length === 0 ) {
                    var notice = '<div class="acf-notice -error no-country-found acf-error-message"><p>País não encontrada. <a href="#" class="add-new-country">Criar nova cidade</a></p></div>';
                    if( !$('.no-country-found').length )
                        $inputSelector.before(notice);
                } else {
                    $('.no-country-found').remove();
                }
            } );

            $('body').on('click', '.add-new-country', function (e) {
                e.preventDefault();
                $('.no-country-found').remove();

                var notice = '<div class="acf-notice -error no-country-found acf-error-message"><p><a href="#" class="cancel-new-country">Cancelar criação de novo país</a></p></div>';
                if( !$('.no-country-found').length )
                    $inputSelector.before(notice);

                $originalSelect.val('other').trigger('change');
                $inputSelector.hide();
                $('.acf-field[data-name="add_country"] input').val($inputSelector.val());
            });

            $('body').on('click', '.cancel-new-country', function (e) {
                e.preventDefault();
                $('.no-country-found').remove();
                $originalSelect.val('').trigger('change');
                $('.acf-field[data-name="add_country"] input').val('');
                $inputSelector.val('').show();
            });
        },

    };
})(jQuery);
