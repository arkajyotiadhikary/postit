function handleClick(e) {
    if (e.name === "signin") {
        window.location.replace("/postit/signin");
    } else if (e.name === "signup") {
        window.location.replace("/postit/signup");
    }
}

function handlePostBtn(e) {
    const post_list = document.querySelector(".post-list");
    const mypost_list = document.querySelector(".mypost-list");
    const all_post_btn = document.querySelector(".all-post");
    const my_post_btn = document.querySelector(".my-post");


    if (e.name === "all-post") {
        all_post_btn.id = "selected-btn";
        my_post_btn.id = "";

        post_list.style.display = "block";
        mypost_list.style.display = "none";
    } else {
        all_post_btn.id = "";
        my_post_btn.id = "selected-btn";
        post_list.style.display = "none";
        mypost_list.style.display = "block";
    }
}