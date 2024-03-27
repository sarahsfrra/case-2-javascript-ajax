let isChatVisible = true; 
function toggleChat() {
    isChatVisible = !isChatVisible; 

    if (isChatVisible) {
        document.getElementById("chat-box").style.display = "block"; 
        view(); 
    } else {
        document.getElementById("chat-box").style.display = "none"; 
    }
}

function view() {
    if (isChatVisible) { 
        const xhr = new XMLHttpRequest()

        xhr.onreadystatechange = function() {
            if(xhr.status === 200 && xhr.readyState === 4) {
                if(prevContent !== xhr.responseText) {
                    document.getElementById("chat-box").innerHTML = xhr.responseText
                    prevContent = xhr.responseText
                }
            } else {
                document.getElementById("chat-box").innerHTML = prevContent
            }
        }
        xhr.open("GET", "box.php", true)
        xhr.send()
    }
}

$(document).ready(function(){
    function refreshChatBox(){
        $.ajax({
            url: 'box.php', 
            success: function(data){
                $('.chat-box').html(data); 
            }
        });
    }
    setInterval(refreshChatBox, 500); 
});


function send() {
    var pesan = document.getElementById("pesan-user").value;
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "send.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
            document.getElementById("pesan-user").value = "";
            document.getElementById("chat-box").innerHTML = xhr.responseText;
        }
    };
    xhr.send("pesan=" + pesan);
}
