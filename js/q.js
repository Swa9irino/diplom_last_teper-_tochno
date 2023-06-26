function toggleAnswer(question) {
    const arrow = question.querySelector(".arrow");
    const answer = question.nextElementSibling;
    if (answer.style.display === "block") {
        answer.style.display = "none";
        arrow.classList.remove("open");
    } else {
        answer.style.display = "block";
        arrow.classList.add("open");
    }
}

