var button = document.querySelectorAll('#likeButton');

if (button != null) {
    button.forEach(function (button) {
        button.addEventListener('click', function (event) {
            var postId = event.target.dataset.postId;
            var action = event.target.dataset.likeAction;

            toggleButtonText(action, event.target);
            updatePostLikesStats(action, postId);

            if (action === "like") {
                axios.post('/post/' + postId + '/like')
                    .then(response => {
                        console.log(response)
                    })
                    .catch(error => {
                        console.log(error.response)
                    });
            }

            if (action === "dislike") {
                axios.delete('/post/' + postId + '/like')
                    .then(response => {
                        console.log(response)
                    })
                    .catch(error => {
                        console.log(error.response)
                    });
            }
        });
    })
}


function toggleButtonText(action, button) {
    if (action === "like") {
        button.textContent = "Dislike";
        button.dataset.likeAction = 'dislike';
    }

    if (action === "dislike") {
        button.textContent = "Like";
        button.dataset.likeAction = 'like';
    }
}

function updatePostLikesStats(action, postId) {
    if (action === "like") {
        document.querySelector('#likes-count-' + postId).textContent++;
    }
    if (action === "dislike") {
        document.querySelector('#likes-count-' + postId).textContent--;
    }
}


