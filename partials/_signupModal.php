<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-black border-warning text-light">
            <div class="modal-header border-warning bg-warning text-dark">
                <h1 class="modal-title fs-5" id="signupModalLabel">Signup to get a ForumHive 🐝 account.</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="partials/_handleSignup.php" method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>

                    <div class="mb-3">
                        <label for="signupEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="signupEmail" name="signupEmail" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text text-warning">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="cpassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="cpassword" name="cpassword">
                    </div>
                    <button type="submit" class="btn btn-warning">Join the Hive! 🐝 </button>


                </div>
            </form>
        </div>
    </div>
</div>