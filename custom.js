function sayHello(){
    alert("Hello!");
}

function TextEditALIGN(){
    var originalTextALIGN = document.getElementById("ALIGN_MESSAGE").innerText;
    var textALIGN = originalTextALIGN.replace("[Click to Edit]", "").trim();

    document.getElementById("editableTextArea").innerHTML = '\
    <form> \
        <textarea name="textEdit" id="textEdit" cols="30" rows="10" style="border-radius: 10px; padding: 10px;">' +
            textALIGN +
        '</textarea>\
        <br>\
        <input type="submit" value="Save" onclick="TextUpdateALIGN()">\
    </form>';

    function TextUpdateALIGN(){
        var text = document.getElementById("textEdit").value;
        document.getElementById("editableTextArea").innerHTML = '<p>'+ text + '\
        <sup><a href="##" onclick="TextEditALIGN()">[Click To Edit]</a></sup></p>';
    }
    
    function submitForm(event) {
        event.preventDefault();
    
        var name = document.getElementById("NameInput").value;
        var email = document.getElementById("EmailInput").value;
        var message = document.getElementById("MessageInput").value;
    
        var resultHTML = "<h2>Your Form is Submitted.</h2>" +
            "<p>Hi " + name + "!</p>" +
            "<p>Thank you for participating. Check your " + email + " to see the follow up</p>" +
            "<p>Message : <br>" + message + "</p>";
    
        var resultForm = document.getElementById("resultForm");
        resultForm.innerHTML = resultHTML;
    }
}