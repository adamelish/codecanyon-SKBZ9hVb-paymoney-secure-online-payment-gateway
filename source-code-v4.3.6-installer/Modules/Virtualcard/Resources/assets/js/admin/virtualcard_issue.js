'use strict';

let providerId = null;

function restrictNumberToPrefdecimalOnInput(e) {
    var type = $('select#currencyCode').find(':selected').data('type')
    restrictNumberToPrefdecimal(e, type);
}
    
$(window).on('load', function() {
    providerId = $('#virtualcardProviderId').val();
    getProviderCurrencies(providerId);
});

$('#virtualcardProviderId').on('change', function() {
    providerId = $(this).val();
    getProviderCurrencies(providerId);
});

function getProviderCurrencies(providerId)
{
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "GET",
        url: ADMIN_URL + "/virtualcard/providers/" + providerId + "/get-currencies",
        data: {
        },
        dataType: 'json',
        success: function(response) {
            let options = '';

            $.each(response.currencies, (index, value) => {
                options +=
                    `<option value="${value.code}" data-type="${value.type}">${value.code}</option>`;
            });

            $('#currencyCode').html(options);
        }
    });
}

$(document).ready(function () {
    const $cardInput = $("#cardNumber");
    const $cardLogo = $("#cardLogo");

    // Card detection logic
    function getCardType(number) {
        const cardPatterns = {
            visa: /^4/,
            mastercard: /^5[1-5]/,
            amex: /^3[47]/,
            discover: /^6(?:011|5)/,
            diners: /^3(?:0[0-5]|[68])/,
            jcb: /^(?:2131|1800|35)/,
            unionpay: /^(62)/,
        };

        for (const [card, pattern] of Object.entries(cardPatterns)) {
            if (pattern.test(number)) return card;
        }
        return "";
    }

    // Input event listener
    $cardInput.on("input", function () {
        let value = $cardInput.val().replace(/\D/g, ""); // Remove non-numeric
        value = value.replace(/(.{4})/g, "$1 ").trim(); // Add space every 4 digits
        $cardInput.val(value);

        // Detect card type
        const cardType = getCardType(value.replace(/\s/g, ""));

        if (cardType && logoUrls[cardType]) {
            $cardLogo.attr("src", logoUrls[cardType]).show(); // Show logo
            $cardInput.css("padding-left", "55px"); // Adjust padding for logo space
        } else {
            $cardLogo.hide(); // Hide logo
            $cardInput.css("padding-left", "15px"); // Reset padding when no card type detected
        }
    });
});


$('#cardExpiryDate').daterangepicker({
    "singleDatePicker": true,
    locale: {
        format: 'DD-M-YYYY'
    }
});

$(document).on('submit', '#virtualCardIssueForm', function() {
    $("#virtualCardIssueBtn").attr("disabled", true);
    $(".fa-spinner").removeClass('d-none');
    $("#virtualCardIssueBtnText").text(submitButtonText);
});

document.getElementById('cardCvc').addEventListener('input', function (e) {
    this.value = this.value.replace(/\D/g, '');
    // Limit to 4 digits
    if (this.value.length > 4) {
        this.value = this.value.slice(0, 4);
    }
});