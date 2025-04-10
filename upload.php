<script src="https://www.gstatic.com/firebasejs/9.6.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.6.1/firebase-storage.js"></script>
<script>
    // Your Firebase config
    const firebaseConfig = {
        apiKey: "AIzaSyAY6cFvK3-qjHcC6WVVNZufT5mgMg0GcvU", // Public API key, not private key
        authDomain: "mynewdb-d615e.firebaseapp.com", // Note: no https:// prefix
        projectId: "mynewdb-d615e",
        storageBucket: "mynewdb-d615e.appspot.com", // Note: different format
        messagingSenderId: "676300457063",
        appId: "1:676300457063:web:c1dfc573db8457e28900c2"
    };

    const app = firebase.initializeApp(firebaseConfig);
    const storage = firebase.storage(app);
</script>