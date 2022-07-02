
document.getElementById("logout-btn").addEventListener("click", logoutClicked);

function logoutClicked(){
    const response = confirm("Are you sure you want to logout?");
    if (response)
    {
        location.href = "Dashboard.php"
    }
    else
    {
        return
    }
}