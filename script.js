// Replace this part with your actual messages data
const messagesData = [
    {
        date: '11/26/2023, 8:08 AM',
        name: 'fahril ahmad',
        email: 'anonymousteam91@gmail.com',
        website: 'https://relaxmusic.rf.gd/',
        message: 'Selamat datang di guestbook kami! Ini adalah pesan pertama. Kami sangat senang Anda berada di sini. Jangan ragu untuk meninggalkan jejak Anda. Tulislah pesan atau pengalaman yang ingin Anda bagikan. Terima kasih atas kunjungan Anda!'
    }
    // Add more messages as needed
];

document.addEventListener('DOMContentLoaded', function () {
    const messagesContainer = document.getElementById('messages-container');

    // Function to render messages
    function renderMessages() {
        messagesContainer.innerHTML = ''; // Clear previous messages

        messagesData.forEach(message => {
            const messageElement = document.createElement('div');
            messageElement.innerHTML = `
                <div>
                    <b>Date:</b> ${message.date}
                </div>
                <div>
                    <b>Name:</b> ${message.name}
                </div>
                <div>
                    <b>Email:</b> <a href="mailto:${message.email}">${message.email}</a>
                </div>
                <div>
                    <b>Web:</b> <a href="${message.website}" target="_blank" rel="nofollow">${message.website}</a>
                </div>
                <div>
                    <b>Message:</b>
                    <p>${message.message}</p>
                </div>
                <hr>
            `;
            messagesContainer.appendChild(messageElement);
        });
    }

    renderMessages(); // Initial render
});
