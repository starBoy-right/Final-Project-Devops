<footer style="background-color: #1a1b22; color: white; border-top-left-radius: 40px; border-top-right-radius: 40px;">
    <div class="container py-5">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 text-center text-lg-start mb-4 mb-lg-0">
                <img src="{{ asset('assets/images/hijo-putih.png') }}" alt="HIJO" style="height: 40px;">
            </div>
            <div class="col-lg-6">
                <ul class="nav justify-content-center justify-content-lg-end">
                    <li class="ms-3"><a href="#" class="text-dark bg-white rounded-circle d-flex align-items-center justify-content-center" style="width: 35px; height: 35px;"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li class="ms-3"><a href="#" class="text-dark bg-white rounded-circle d-flex align-items-center justify-content-center" style="width: 35px; height: 35px;"><i class="fa-brands fa-linkedin-in"></i></a></li>
                    <li class="ms-3"><a href="#" class="text-dark bg-white rounded-circle d-flex align-items-center justify-content-center" style="width: 35px; height: 35px;"><i class="fa-brands fa-twitter"></i></a></li>
                    <li class="ms-3"><a href="#" class="text-dark bg-white rounded-circle d-flex align-items-center justify-content-center" style="width: 35px; height: 35px;"><i class="fa-brands fa-whatsapp"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-4">
                <div class="rounded-4 overflow-hidden shadow-sm" style="height: 250px;">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.733221008272!2d106.83226307585093!3d-6.298711361643916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f21059f1396b%3A0xc623f92e85093e0!2sJl.%20Lenteng%20Agung%20Raya%20No.20!5e0!3m2!1sen!2sid!4v1715600000000!5m2!1sen!2sid" 
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>

            <div class="col-lg-4 px-lg-5">
                <h5 class="fw-bold mb-4" style="background-color: #adff2f; color: black; display: inline-block; padding: 2px 10px; border-radius: 5px;">Contact Us:</h5>
                <p class="mb-2">Email: <a href="mailto:info@hijo.com" class="text-white text-decoration-none">info@hijo.com</a></p>
                <p class="mb-2">Phone: <a href="tel:6285719209180" class="text-white text-decoration-none">+62 857-1920-9180</a></p>
                <p class="text-secondary">
                    Jl. Lenteng Agung Raya No. 20 <br>
                    Jagakarsa, Jakarta Selatan
                </p>
            </div>

            <div class="col-lg-4">
                <div class="p-4 rounded-4" style="background-color: #25262e;">
                    <form>
                        <div class="mb-3">
                            <input type="email" class="form-control bg-transparent text-white border-secondary shadow-none" placeholder="Email" style="border-radius: 8px;">
                        </div>
                        <button type="submit" class="btn w-100 fw-bold" style="background-color: #adff2f; color: black; border-radius: 8px;">Subscribe to news</button>
                    </form>
                </div>
            </div>
        </div>

        <hr class="mt-5 mb-4" style="border-color: rgba(255,255,255,0.1);">

        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <p class="small mb-0 opacity-75">© {{ date('Y') }} HIJO-4EVER. All Rights Reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <a href="#" class="text-white text-decoration-none small opacity-75">Privacy Policy</a>
            </div>
        </div>
    </div>
</footer>