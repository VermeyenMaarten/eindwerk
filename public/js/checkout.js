Stripe.setPublishableKey('pk_test_UtkBPMwpz4tvPV6OfEJ4pXfx');

var $form = $('#checkout-form');

$form.submit(function(event) {

    $('#checkout-error').addClass('hidden');
    $form.find('button').prop('disabled', true);

    Stripe.card.createToken({
        number: $('#number').val(),
        cvc: $('#cvc').val(),
        exp_month: $('#exp_month').val(),
        exp_year: $('#exp_year').val(),
        name: $('#card_holder_name').val(),
        customer_name: $('#name').val(),
        address_line1: $('#street_name').val(),
        address_zip: $('#postal_code').val(),
        address_city: $('#city').val(),
        address_country: $('#country').val()

    }, stripeResponseHandler);
    return false;
});

function stripeResponseHandler(status, response) {

    if(response.error) {
        $('#checkout-error').removeClass('hidden');
        $('#checkout-error').text(response.error.message);
        $form.find('button').prop('disabled', false);
    }else {
        // Get the token ID:
        var token = response.id;

        // Insert the token into the form so it gets submitted to the server:
        $form.append($('<input type="hidden" name="stripeToken" />').val(token));

        // Submit the form:
        $form.get(0).submit();
    }

}