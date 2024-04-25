<form id="contact-form" action="submit.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="name"  placeholder="First Name *" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email" placeholder="Email *" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="phone"  placeholder="Phone *" required>
                        </div>
                        
                        <div class="col-md-6">
                            <input type="text" name="product"  placeholder="Products *" required>
                        </div>
                    </div>
                    <textarea name="message"  placeholder="Message *" required></textarea>
                    
                    
                    <button type="submit" name="submit_form" class="submit-btn default-btn">
                        <span>Send Email</span>
                    </button>
                    <!-- <p class="form-messege"></p> -->
                </form>