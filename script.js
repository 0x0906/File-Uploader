const dropContainer = document.getElementsByClassName('upload-container')[0];
var uploadcontainer = document.getElementsByClassName("upload-container")[0];
var overlay = document.getElementsByClassName("overlay")[0];
let fileinput;


window.addEventListener('resize', updateStyle);

function updateStyle() {
    if(window.innerWidth > 600)
    {
        if(fileinput)
        {
            uploadcontainer.style.height = "290px";
            uploadcontainer.style.width = "340px";
        }
        else
        {
            uploadcontainer.style.width = "340px";
            uploadcontainer.style.height = "265px";
        }
    }
    else
    {
        if(fileinput)
        {
            uploadcontainer.style.width = "270px";
            uploadcontainer.style.height = "270px";
        }
        else
        {
            uploadcontainer.style.width = "270px";
            uploadcontainer.style.height = "200px";
        }
    }
}


dropContainer.addEventListener('dragover', function (e) {
    e.preventDefault();
    e.stopPropagation();
    dropContainer.classList.add('dragging');
});

dropContainer.addEventListener('dragleave', function (e) {
  e.preventDefault();
  e.stopPropagation();
  dropContainer.classList.remove('dragging');
});

dropContainer.addEventListener('drop', function (e) {
  e.preventDefault();
  e.stopPropagation();
  dropContainer.classList.remove('dragging');
  handleFile(e.dataTransfer.files[0]);
});

document.getElementById('file-input').addEventListener('change', function (e) {
    handleFile(e.target.files[0]);
});

function OpenFileDialog(){
    document.getElementById('file-input').click();
}

function handleFile(file){
    var notify = document.getElementById("notify");
    var fileinfocontainer = document.getElementsByClassName("file-info-container")[0];
    var uploadimg = document.getElementsByClassName("upload-img")[0];
    var fileinfoval = document.getElementsByClassName("file-info-val");
    var fileinputelement =  document.getElementById("file-input");

    if(file)
    {
        if(file.size < (1024 * 1024 * 20))
        {
            fileinput = file;
            if(window.innerWidth > 600)
            {
                uploadcontainer.style.height = "290px";
            }
            else
            {
                uploadcontainer.style.height = "270px";
            }
            fileinfoval[0].textContent = file.name;
            fileinfoval[1].textContent = bytestostring(file.size);
            fileinfoval[2].textContent = file.type ? file.type : "Unknown";
            fileinfocontainer.style.display = "block";
            uploadimg.style.display = "none";
        }
        else
        {
            notify.classList.remove("glow");
            notify.classList.add("glow");
            setTimeout(()=> notify.classList.remove("glow"), 2000)
            fileinput = null;
            if(window.innerWidth  > 600)
            {
                uploadcontainer.style.height = "265px";
            }
            else
            {
                uploadcontainer.style.height = "200px";
            }
            fileinfoval[0].textContent = "";
            fileinfoval[1].textContent = "";
            fileinfoval[2].textContent = "";
            fileinfocontainer.style.display = "none";
            uploadimg.style.display = "block";
        }
    }
    else{
        fileinputelement.value = null;
        fileinput = null;
        if(window.innerWidth > 600)
        {
            uploadcontainer.style.height = "265px";
        }
        else
        {
            uploadcontainer.style.height = "200px";
        }
        fileinfoval[0].textContent = "";
        fileinfoval[1].textContent = "";
        fileinfoval[2].textContent = "";
        fileinfocontainer.style.display = "none";
        uploadimg.style.display = "block"; 
    }
}

function shortText(text, length){
    if(text.length > length){
        return text.substring(0, length - 3)  + "...";
    }
    return text;
}

function closefileinfo(){
    handleFile(null);
}

function upload(){
    if(getAgreement())
    {
        var uploadBtn = document.getElementsByClassName("upload-btn")[0];
        var token =  document.querySelector('meta[name="token"]').getAttribute('content');
        if(fileinput){

            const formData = new FormData();
            formData.append('file', fileinput);
            formData.append('token', token);

            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'upload.php', true);
            xhr.upload.onprogress = function(event) 
            {
                if (event.lengthComputable) {
                    var percentComplete = (event.loaded / event.total) * 100;
                    progress(percentComplete.toFixed(2), false);
                }
            };

            xhr.onload = function () 
            {
                if (xhr.status === 200) {
                    msg(xhr.responseText, true)
                } else {
                    msg(xhr.responseText, false)
                }
            };

            xhr.send(formData);
        }
        else{
            alert("Select your file first !");
        }
    }else{
        overlay.style.display = "flex";
    }
}

function bytestostring(bytes){
    var suff = [ "B", "KB", "MB", "GB", "TB", "PB", "EB" ];
    bytes = Math.abs(bytes);
    var place = Math.floor(Math.log(bytes) / Math.log(1024));
    var num = Math.round((bytes / Math.pow(1024, place)) * 1000) / 1000;
    return (Math.sign(bytes) * num) + " " + suff[place]
}

function progress(value, reset){
    var uploadBtnText = document.getElementsByClassName("upload-btn-text")[0];
    var uploadBtnProgress = document.getElementsByClassName("upload-btn-progress")[0];
    if(reset){
        uploadBtnText.textContent = "Upload";
        uploadBtnProgress.style.width = "100%";
    }
    else{
        uploadBtnText.textContent = "Uploading [" + value + "%]";
        uploadBtnProgress.style.width = value + "%";
    }
}

function msg(msg, success){
    var responseimg = document.getElementsByClassName("response-img")[0];
    var responsetext = document.getElementsByClassName("response-text")[0];
    var responsecontainer = document.getElementsByClassName("response-container")[0];
    var responseservermessage = document.getElementsByClassName("response-server-message")[0];
    uploadcontainer.style.display = "none";
    responsecontainer.style.display = "flex";
    responseservermessage.textContent = msg;
    if(success){
        responsetext.textContent = "Success";
        responsetext.style.marginTop = "0px";
        responsetext.style.color = "rgb(43, 182, 115)";
        responseimg.src = "/img/381607_complete_icon.png";
        responseimg.style.width = "100px";
        responseimg.style.height = "100px";
    }else{
        responsetext.textContent = "Failed";
        responsetext.style.marginTop = "5px";
        responsetext.style.color = "rgb(254, 94, 94)";
        responseimg.src = "/img/381610_incorrect_icon.png";
        responseimg.style.width = "95px";
        responseimg.style.height = "95px";
    }
}

function goback() {
    progress(0, true);
    closefileinfo();
    var responseimg = document.getElementsByClassName("response-img")[0];
    var responsetext = document.getElementsByClassName("response-text")[0];
    var responsecontainer = document.getElementsByClassName("response-container")[0];
    var responseservermessage = document.getElementsByClassName("response-server-message")[0];
    uploadcontainer.style.display = "flex";
    responsecontainer.style.display = "none";
    responseimg.src = "";
    responsetext.textContent = ""
    responsetext.style.color = "white";
    responseservermessage.textContent = "";
}

function copyreponse(){
    var responseservermessage = document.getElementsByClassName("response-server-message")[0];
    var ortxt = responseservermessage.textContent;
    var tempElement = document.createElement("textarea");
    tempElement.value = ortxt;
    document.body.appendChild(tempElement);
    tempElement.select();
    if(document.execCommand("copy"))
    {   
        responseservermessage.textContent = "Copied !";
    }
    document.body.removeChild(tempElement);
    setTimeout(()=> {  responseservermessage.textContent = ortxt; }, 1500);
}


function getAgreement(){
    return localStorage.getItem("Agreement") === 'true';
}

function PopResponse(value){
    if(value){
        localStorage.setItem("Agreement", true);
        upload();
    }else{
        localStorage.setItem("Agreement", false);
    }
    overlay.style.display = "none";
}