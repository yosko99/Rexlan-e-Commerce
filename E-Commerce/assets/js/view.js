export const loginModal = `
    <form method="post">
        <input type="email" required class='form-control my-2' name="loginEmail" id="email" placeholder="Enter email">
        <input type="password" required class='form-control my-2' name="loginPassword" id="password" placeholder="Enter password">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="stayLogged" id="stayLogged" />
            <label class="form-check-label" for="flexCheckDefault">
                Stay logged
            </label>
        </div>
        <button type="submit" class='btn btn-primary w-auto my-2'>Login</button>
    </form>
`;
export const regModal = `
    <form method="post">
        <input type="email" required class='form-control my-2' name="regEmail" id="email" placeholder="Enter email">
        <input type="password" required class='form-control my-2' name="regPassword" id="password" placeholder="Enter password">
        <input type="text" required class='form-control my-2' placeholder="Enter name" name="name" id="name">
        <input type="text" required name="city" placeholder="Enter city" class='form-control my-2' id="city">
        <button type="submit" class='btn btn-success w-auto my-2'>Register</button>
    </form>
`;


