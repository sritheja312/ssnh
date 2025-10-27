<div class="appointment-one__content">
            <form action="assets/inc/sendemail.php" class="appointment-one__form contact-form-validated form-one wow fadeInUp" data-wow-duration="1500ms">
                <div class="form-one__group">
                    <div class="form-one__control">
                        <input type="text" name="name" placeholder="Full Name*">
                    </div><!-- /.form-one__control -->
                    <div class="form-one__control">
                        <input type="email" name="email" placeholder="Email Address*">
                    </div><!-- /.form-one__control -->
                    <div class="form-one__control">
                        <input type="tel" name="number" placeholder="Phone Number">
                    </div><!-- /.form-one__control -->
                    <div class="form-one__control appointment-one__form__date">
                        <input type="text" name="date" placeholder="Select Date*" id="datepicker" class="mediox-datepicker">
                        <span class="appointment-one__form__date__arrow">
                            <i class="icon-caret-down"></i>
                        </span><!-- /.appointment-one__form__date__arrow -->
                    </div><!-- /.form-one__control -->
                    <div class="form-one__control">
                        <select class="selectpicker" aria-label="Type of Service">
                            <option selected>Type of Service</option>
                            <option value="1">immediate care</option>
                            <option value="2">dental care</option>
                            <option value="3">neurology care</option>
                            <option value="4">gynaecologists</option>
                            <option value="5">orthopaedics</option>
                            <option value="6">cardiology</option>
                        </select>
                    </div><!-- /.form-one__control -->
                    <div class="form-one__control form-one__control--full">
                        <textarea name="message" placeholder="Type Here..."></textarea>
                    </div><!-- /.form-one__control -->
                    <div class="form-one__control form-one__control--full">
                        <button type="submit" class="mediox-btn">
                            <span>book appointment</span>
                            <span class="mediox-btn__icon"><i class="icon-up-right-arrow"></i></span>
                        </button>
                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                    </div>
                </div>
            </form>
            <div class="result"></div>
        </div>