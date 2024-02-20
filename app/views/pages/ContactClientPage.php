<div class="bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong
                    class="text-black">Contact</strong></div>
        </div>
    </div>
</div>
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Get In Touch</h2>
            </div>
            <div class="col-md-7">
                <form action="/contact" method="post" onsubmit="return validateContactForm()">
                    <div class="p-3 p-lg-5 border">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="name" class="text-black">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="">
                                <p id="nameError" class="error-message" style="color: red;"></p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="c_email" name="c_email" placeholder="">
                                <p id="c_emailError" class="error-message" style="color: red;"></p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="c_phone" name="c_phone" placeholder="">
                                <p id="c_phoneError" class="error-message" style="color: red;"></p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="c_subject" class="text-black">Subject </label>
                                <input type="text" class="form-control" id="c_subject" name="c_subject">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="c_message" class="text-black">Message </label>
                                <textarea name="c_message" id="c_message" cols="30" rows="7"
                                    class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <input name="SendContact" type="submit" class="btn btn-primary btn-lg btn-block"
                                    value="Send Message">
                            </div>
                        </div>
                    </div>
                </form>
            </div>


            <div class="col-md-5 ml-auto">
                <div class="p-4 border mb-3">
                    <span class="d-block text-primary h6 text-uppercase">New York</span>
                    <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
                </div>
                <div class="p-4 border mb-3">
                    <span class="d-block text-primary h6 text-uppercase">London</span>
                    <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
                </div>
                <div class="p-4 border mb-3">
                    <span class="d-block text-primary h6 text-uppercase">Canada</span>
                    <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
                </div>

            </div>
        </div>
    </div>
</div>
<script>
    function validateContactForm() {
        var name = document.getElementById("name").value;
        var email = document.getElementById("c_email").value;
        var phone = document.getElementById("c_phone").value;
        var subject = document.getElementById("c_subject").value;
        var message = document.getElementById("c_message").value;

        // Clear previous error messages
        clearErrorMessages();

        // Validate Name
        if (name.trim() === "") {
            displayErrorMessage("Name cannot be empty", "name");
            return false;
        }

        // Validate Email with specific domain (e.g., @gmail.com)
        var emailRegex = /^[^\s@]+@gmail\.com$/;
        if (!emailRegex.test(email)) {
            displayErrorMessage("Invalid email format or not a Gmail address", "c_email");
            return false;
        }

        // Validate Phone
        var phoneRegex = /^\d{10}$/;
        if (!phoneRegex.test(phone)) {
            displayErrorMessage("Phone number must be 10 digits", "c_phone");
            return false;
        }

        // Additional validation logic for other fields can be added here

        return true;
    }

    function displayErrorMessage(message, elementId) {
        var errorElement = document.getElementById(elementId + "Error");
        if (errorElement) {
            errorElement.innerText = message;
        }
    }

    function clearErrorMessages() {
        var errorElements = document.querySelectorAll(".error-message");
        errorElements.forEach(function (element) {
            element.innerText = "";
        });
    }

</script>