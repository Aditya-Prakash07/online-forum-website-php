<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-black border-warning text-light">
            <div class="modal-header border-warning bg-warning">
                <h1 class="modal-title fs-5 text-dark" id="loginModalLabel">Login to ForumHive 🐝</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="partials/_handleLogin.php" method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="loginEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="loginEmail" 
                        name="loginEmail" 
                        aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text text-warning">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        
                    </div>
                    <button type="submit" class="btn btn-warning">Get in the Buzz! 🐝 </button>
                </div>
            </form>
        </div>
    </div>
</div>