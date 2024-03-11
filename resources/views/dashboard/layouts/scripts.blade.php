<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="{{ URL::asset('assets/libs/bootstrap/bootstrap.bundle.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- App js -->
<script src="{{ URL::asset('assets/js/app.js') }}"></script>
<script>
    function togglePasswordVisibility() {
        let passwordInput = document.getElementById('password');
        let eyeIcon = document.getElementById('eyeIcon');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.classList.remove('bi-eye');
            eyeIcon.classList.add('bi-eye-slash');
        } else {
            passwordInput.type = 'password';
            eyeIcon.classList.remove('bi-eye-slash');
            eyeIcon.classList.add('bi-eye');
        }
    }
    function toggleConfirmPasswordVisibility() {
        let passwordConfirmInput = document.getElementById('password_confirmation');
        let eyeConfirmIcon = document.getElementById('eyeConfirmIcon');

        if (passwordConfirmInput.type === 'password') {
            passwordConfirmInput.type = 'text';
            eyeConfirmIcon.classList.remove('bi-eye');
            eyeConfirmIcon.classList.add('bi-eye-slash');
        } else {
            passwordConfirmInput.type = 'password';
            eyeConfirmIcon.classList.remove('bi-eye-slash');
            eyeConfirmIcon.classList.add('bi-eye');
        }
    }

    function setDiscountValueAttributes() {
        const discountTypeInput = document.getElementById('discount_type');
        const discountAmountInput = document.getElementById('discount_amount');

        if (discountTypeInput.value === '1') {
            discountAmountInput.min = '1';
            discountAmountInput.max = '100';
        } else {
            discountAmountInput.min = '';
            discountAmountInput.max = '';
        }
    }

    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }

    document.addEventListener('DOMContentLoaded', function () {
        const selectAllCheckboxes = document.querySelectorAll('.select-all-checkbox');
        selectAllCheckboxes.forEach(function (checkbox) {
            checkbox.addEventListener('click', function () {
                const permissionsCheckboxes = this.closest('.collapse').querySelectorAll('.permission-checkbox');
                permissionsCheckboxes.forEach(function (permissionCheckbox) {
                    permissionCheckbox.checked = checkbox.checked;
                });
            });
        });
    });
</script>
@stack('scripts')
