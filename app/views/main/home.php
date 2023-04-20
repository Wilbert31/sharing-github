<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/modals/createPostModal.php'; ?>


<div class="w-100 m-auto" style="max-width: 600px;">

    <div class="card mb-5">
        <div class="card-body">
            Create a post you want to share with others. 

            
            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#createPost"><i class="fa fa-plus" aria-hidden="true"></i> Create a Post</button>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-body">
            <div class="d-flex align-items-start mb-4">
                <img class="me-3" height="50" width="50px" src='https://avataaars.io/?avatarStyle=Circle&topType=LongHairStraight&accessoriesType=Blank&hairColor=BrownDark&facialHairType=Blank&clotheType=BlazerShirt&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light'/>

                <div>
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                </div>
            </div>
                            
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            

            <div class="" id="accordionExample">
                <div class="accordion-item">
                    <a href="#" class="card-link d-inline me-3">Like</a>
                    <a href="#" class="d-inline" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Comment</a>
                    <hr>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">

                            <div class="d-flex align-items-start mb-4">
                                <img class="me-3" height="40" width="40px" src='https://avataaars.io/?avatarStyle=Circle&topType=LongHairStraight&accessoriesType=Blank&hairColor=BrownDark&facialHairType=Blank&clotheType=BlazerShirt&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light'/>
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" max-length="100"></textarea>
                            </div>

                            <div class="d-flex align-items-start mb-4">
                                <img class="me-3" height="40" width="40px" src='https://avataaars.io/?avatarStyle=Circle&topType=LongHairStraight&accessoriesType=Blank&hairColor=BrownDark&facialHairType=Blank&clotheType=BlazerShirt&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light'/>

                                <div>
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-start mb-4">
                <img class="me-3" height="50" width="50px" src='https://avataaars.io/?avatarStyle=Circle&topType=LongHairStraight&accessoriesType=Blank&hairColor=BrownDark&facialHairType=Blank&clotheType=BlazerShirt&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light'/>

                <div>
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                </div>
            </div>
                            
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            

            <div class="" id="accordionExample">
                <div class="accordion-item">
                    <a href="#" class="card-link d-inline me-3">Like</a>
                    <a href="#" class="d-inline" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Comment</a>
                    <hr>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">

                            <div class="d-flex align-items-start mb-4">
                                <img class="me-3" height="40" width="40px" src='https://avataaars.io/?avatarStyle=Circle&topType=LongHairStraight&accessoriesType=Blank&hairColor=BrownDark&facialHairType=Blank&clotheType=BlazerShirt&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light'/>
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" max-length="100"></textarea>
                            </div>

                            <div class="d-flex align-items-start mb-4">
                                <img class="me-3" height="40" width="40px" src='https://avataaars.io/?avatarStyle=Circle&topType=LongHairStraight&accessoriesType=Blank&hairColor=BrownDark&facialHairType=Blank&clotheType=BlazerShirt&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light'/>

                                <div>
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
