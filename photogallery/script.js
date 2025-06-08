function loadPhotos() {
    fetch('get_photos.php')
        .then(response => response.json())
        .then(data => {
            const gallery = document.getElementById('photo-gallery');
            gallery.innerHTML = '';

            data.forEach(photo => {
                const photoDiv = document.createElement('div');

                photoDiv.innerHTML =
                    <img src="uploads/${photo.photo_name}" width="200">
                        <p>${photo.comment}</p>
                        <button onclick="deletePhoto(${photo.id})">Удалить</button>
                        <hr>
                            ;

                            gallery.appendChild(photoDiv);
            });
        });
}

                            function deletePhoto(id) {
    if (confirm('Вы уверены, что хотите удалить это фото?')) {
                                fetch('delete_photo.php', {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/x-www-form-urlencoded'
                                    },
                                    body: id = ${ id }
        })
        .then(response => {
            if (response.ok) {
                                loadPhotos(); // Обновляем галерею после удаления
            } else {
                                alert('Ошибка при удалении фотографии.');
            }
        });
    }
}

                            loadPhotos();
