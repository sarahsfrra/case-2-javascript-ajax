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
        const xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if(xhr.status === 200 && xhr.readyState === 4) {
                document.getElementById("chat-box").innerHTML = xhr.responseText;
            }
        }
        xhr.open("GET", "index.php?action=box", true);
        xhr.send();
    }
}

$(document).ready(function(){
    function refreshChatBox(){
        $.ajax({
            url: 'index.php?action=box', 
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
    xhr.open("POST", "index.php?action=send", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
            document.getElementById("pesan-user").value = "";
            refreshChatBox();
        }
    };
    xhr.send("pesan=" + pesan);
}
