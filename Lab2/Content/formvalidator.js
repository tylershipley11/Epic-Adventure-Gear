formValidator();

function formValidator(){

    //locate the form and prevent deafult initial server contact
    document.getElementById("contact-form").addEventListener("submit", function(event){
        event.preventDefault();


        //getting and storing input values
        let name = document.getElementById("name").value.trim();
        let email = document.getElementById("email").value.trim();
        let phone = document.getElementById("phone").value.trim();
        let message = document.getElementById("message").value.trim();


        //setting email validation pattern
        let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;


        //setting phone validation pattern
        let phonePattern = /^(\+\d{1,3}[- ]?)?(\(?\d{1,4}\)?[- ]?)?[\d\- ]{7,15}$/;



        //test input validity and alert as needed
        if(name === ""){
            alert("Error: Name is required.");
            return;
        }

        if(email === ""){
            alert("Error: Email is required.");
            return;
        }
        else if(!emailPattern.test(email)){
            alert("Error: Invalid email format. Example: example@email.com");
            return;
        }

        if(phone === ""){
            alert("Error: Phone Number is required.");
            return;
        }
        else if(!phonePattern.test(phone)){
            alert("Error: Invalid phone number format. \n ~I don't know how you messed that up. I allowed almost all formats!!~");
            return;
        }

        if(message === ""){
            alert("Error: Message field cannot be empty.");
            return;
        }

        //if nothing is wrong, allow user to confirm their answers
        let confirmation = confirm(
            `Please confirm your details:\n\n` +
            `Name: ${name}\n` +
            `Email: ${email}\n` +
            `Phone: ${phone}\n` +
            `Message: ${message}\n\n` +
            `Do you want to submit?`
        );

        if (confirmation) {
            alert("Form successfully submitted!");

            //clear form for security reasons
            document.getElementById("name").value = "";
            document.getElementById("email").value = "";
            document.getElementById("phone").value = "";
            document.getElementById("message").value = "";
            document.getElementById("inquiry").value = ""; 
            document.getElementById("contact-method-phone").checked = false;
            document.getElementById("contact-method-email").checked = false;
        }
    });
}