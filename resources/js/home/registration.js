document.addEventListener('DOMContentLoaded', function() {
    var accountTypeSelect = document.getElementById('account-type');
    var companyFields = document.getElementById('company-fields');

    accountTypeSelect.addEventListener('change', function() {
        if (accountTypeSelect.value === 'company') {
            companyFields.style.display = 'block';
        } else {
            companyFields.style.display = 'none';
        }
    });
});
