document.addEventListener("DOMContentLoaded", () => {
    initSelectRole();
    initTogglePassword();
    initBackToRole();
    setCustomValidation();  
});

/**
 * Initializes role selection functionality.
 */
function initSelectRole() {
    const roleButtons = document.querySelectorAll('.role-select-button');
    const roleInputs = document.querySelectorAll('.role');

    roleButtons.forEach(button => {
        button.addEventListener('click', () => {
            const role = button.getAttribute("value");
            roleInputs.forEach(input => {
                input.value = role
            });
            toggleSignOnForm(role);
        });
    });
}

function handleSocialSignOn(provider){
    
    let form = document.getElementById(`sign-on-${provider}`);
    //console.log(document.querySelectorAll('.form'));
    form.submit();

}

/**
 * Initializes password toggle functionality.
 */
function initTogglePassword() {
    document.querySelectorAll(".toggle-password").forEach(button => {
        const input = button.previousElementSibling;

        button.addEventListener("click", () => togglePassword(input, button));
    });
}

/**
 * Toggles password visibility and updates the icon.
 */
function togglePassword(input, button) {
    if (!input) return;

    const eyeIcon = `<i class="fa-solid fa-eye"></i>`;
    const eyeSlashIcon = `<i class="fa-solid fa-eye-slash"></i>`;

    const isPassword = input.type === "password";
    input.type = isPassword ? "text" : "password";
    button.innerHTML = isPassword ? eyeSlashIcon : eyeIcon;
}

/**
 * Initializes back-to-role functionality.
 */
function initBackToRole() {
    if(document.getElementById("back-to-role")){
        document.getElementById("back-to-role").addEventListener("click", () => {
            toggleSignOnForm();
        });
    }
}

/**
 * Toggles between role selection and sign-on form.
 * @param {string} [role] - The selected role (optional).
 */
function toggleSignOnForm(role) {
    const roleMap = {
        student: "Học sinh",
        teacher: "Giáo viên",
        parent: "Phụ huynh"
    };

    const titleBox = document.getElementById('instruction-title');
    const roleForm = document.getElementById('role-select');
    const signOnForm = document.getElementById('sign-on');
    const socialForm = document.getElementById('social-signon-form');

    titleBox.innerHTML = role ?
        `<p> Đăng ký để trở thành <span class="text-orange-primary">${roleMap[role]}</span> trên <span class="text-blue-secondary">Onthi360</span> </p>` :
        `<p>Bạn muốn đăng ký với tư cách là:</p>`;

    roleForm.classList.toggle("hidden");
    socialForm.classList.toggle("hidden");
    signOnForm.classList.toggle("hidden");
}

function setCustomValidation() {

    const requiredInputs = document.querySelectorAll("input[required]");

    requiredInputs.forEach(input => {

        input.addEventListener("invalid", function (event) {
            if (this.validity.valueMissing) {
                if(this.getAttribute('name') == "terms"){
                    this.setCustomValidity(`Vui lòng đồng ý với các điều khoản`)
                }else{
                    this.setCustomValidity(`Thông tin này là bắt buộc!`); // Custom message
                }   
            } else if(this.validity.typeMismatch){
                this.setCustomValidity("Vui lòng nhập đúng định dạng!");
            }
            else {
                this.setCustomValidity(""); // Reset message when valid
            }
        });

        input.addEventListener("input", function () {
            this.setCustomValidity(""); // Clear error when user types
        });
    });
}