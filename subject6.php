<?php include'header.php';?>
            <div id="megawrapper">
            <!-- The definition of the class  -->
                <div class="container ">
                    <div class="panel panel-primary col-md-4 " id="sidelist">
                        <h2 class=" panel-heading" >
                          <?php echo  $_SESSION['dept'];?>-<?php echo $_SESSION['college'];?>
                        </h2>   
                        <ul class="list-group panel-body">
                            <h2>Subjects</h2>
                         <a href="subject1.php" class="list-group-item ">
                            Mathematics<span class="badge">4</span>
                          </a>
                          <a href="subject2.php" class="list-group-item">Software Engineering  <span class="badge">4</span></a>
                          <a href="subject3.php" class="list-group-item ">System programming  <span class="badge">4</span></a>
                          <a href="subject4.php" class="list-group-item " >Microprocessors-8085<span class="badge">4</span></a>
                          <a href="subject5.php" class="list-group-item ">Computer Graphics  <span class="badge">4</span></a>
                          <a href="subject6.php" class="list-group-item active">Database Management  <span class="badge">4</span></a>
                              <a href="http://mec.ac.in/mec/pdf/CS2012.pdf" class="list-group-item">Topics/Syllabus</a>
                        </ul>
                       
                    </div>
     <!-- the mulitple choice Question part  -->
                    <div class="container col-md-7" id="qanda">
                        <ul class="question">
                            <form action="">
                                <h3 class="query">Sample Queries</h3>
                                <li class="answer">
                                    <input type="radio" name="mcq" class="radioinput">
                                    <div class="options">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, laborum!</div>
                                </li>
                                <li class="answer">
                                    <input type="radio" name="mcq" class="radioinput">
                                    <div class="options">Natus sunt debitis enim libero quis, nobis! Aut, fuga eos!</div>
                                </li>
                                <li class="answer">
                                    <input type="radio" name="mcq" class="radioinput">
                                    <div class="options">Quo corporis neque quod quisquam ab perspiciatis cupiditate minus, at!</div>
                                </li>
                                <li class="answer">
                                    <input type="radio" name="mcq" class="radioinput">
                                    <div class="options">Magni ducimus ullam ea esse consectetur officia at architecto mollitia.</div>
                                </li>
                            </form>
                        </ul>
                        <ul class="question">
                            <form action="">
                                 <h3 class="query">Sample Queries</h3>
                                <li class="answer">
                                    <input type="radio" name="mcq" class="radioinput">
                                    <div class="options">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, totam.</div>
                                </li>
                                <li class="answer">
                                    <input type="radio" name="mcq" class="radioinput">
                                    <div class="options">Porro assumenda vero numquam aut, error a adipisci illum dolorum!</div>
                                </li>
                                <li class="answer">
                                    <input type="radio" name="mcq" class="radioinput">
                                    <div class="options">Incidunt tempora cum iste beatae temporibus quisquam molestias harum veritatis!</div>
                                </li>
                                <li class="answer">
                                    <input type="radio" name="mcq" class="radioinput">
                                    <div class="options">Excepturi, voluptates ut perferendis ratione deserunt! Omnis, ad fugiat alias!</div>
                                </li>
                            </form>
                        </ul>
                        <ul class="question">
                            <form action="">
                                 <h3 class="query">Sample Queries</h3>
                                <li class="answer">
                                    <input type="radio" name="mcq" class="radioinput">
                                    <div class="options">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, ullam!</div>
                                </li>
                                <li class="answer">
                                    <input type="radio" name="mcq" class="radioinput">
                                    <div class="options">Quo tempora soluta, omnis! Fuga quas laudantium molestiae culpa neque.</div>
                                </li>
                                <li class="answer">
                                    <input type="radio" name="mcq" class="radioinput">
                                    <div class="options">Blanditiis facere mollitia enim iure, facilis adipisci ullam sint accusamus!</div>
                                </li>
                                <li class="answer">
                                    <input type="radio" name="mcq" class="radioinput">
                                    <div class="options">Maiores dolore blanditiis, debitis officia libero sit, architecto porro quia.</div>
                                </li>
                            </form>
                        </ul>
                        <ul class="question">
                            <form action="">
                                 <h3 class="query">Sample Queries</h3>
                                <li class="answer">
                                    <input type="radio" name="mcq" class="radioinput">
                                    <div class="options">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, eaque.</div>
                                </li>
                                <li class="answer">
                                    <input type="radio" name="mcq" class="radioinput">
                                    <div class="options">Ipsa atque quo magni nostrum, dolorum ad eos sapiente repudiandae.</div>
                                </li>
                                <li class="answer">
                                    <input type="radio" name="mcq" class="radioinput">
                                    <div class="options">Illo consequuntur alias neque maxime repellat, quo veniam omnis quidem!</div>
                                </li>
                                <li class="answer">
                                    <input type="radio" name="mcq" class="radioinput">
                                    <div class="options">Enim dignissimos asperiores deleniti ullam aliquam, itaque doloremque vero fugit.</div>
                                </li>
                            </form>
                        </ul>
                        <ul class="question">
                            <form action="">
                                 <h3 class="query">Sample Queries</h3>
                                <li class="answer">
                                    <input type="radio" name="mcq" class="radioinput">
                                    <div class="options">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, odit.</div>
                                </li>
                                <li class="answer">
                                    <input type="radio" name="mcq" class="radioinput">
                                    <div class="options">Quasi praesentium vel doloribus et, laudantium, nostrum voluptates aliquam delectus!</div>
                                </li>
                                <li class="answer">
                                    <input type="radio" name="mcq" class="radioinput">
                                    <div class="options">Eum blanditiis soluta eaque maxime dignissimos debitis placeat eligendi officiis.</div>
                                </li>
                                <li class="answer">
                                    <input type="radio" name="mcq" class="radioinput">
                                    <div class="options">Explicabo tenetur at repudiandae aliquam commodi possimus sit atque, doloribus!</div>
                                </li>
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
<?php include'footer.php';?>