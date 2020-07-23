@extends('user.shared.template')
@section('title')
    settings
@endsection
@section('content')

    <div class="container" style="font-family: 'Permanent Marker', cursive; font-family: 'Alegreya', serif;">
        <div class="row mt-3 "></div>
        <div class="card mt-5 bg-light shadow  mx-auto ">
            <div class="card-body">
                <div class="row">

                    <div class="col-md-3 ml-5 mt-4 mb-3">
                        <form action="/settingsemployee/uploadImage"
                              method="post" id="imageForm" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form">
                                    <div class="profile-img ">
                                        <img src=" {{Auth::user()->image ? asset(Auth::user()->image->path): ""}}"/>
                                        <div class="file btn btn-lg btn-primary">
                                            Change Photo<input type="file" id="image" name="image"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="row">
{{--                                    <div class="todo-container col-9">--}}
{{--                                        <div class="add-task ">--}}
{{--                                            <input type="text" name="skill" value="">--}}
{{--                                            <span class="plus">+</span>--}}
{{--                                        </div>--}}

{{--                                        <div class="tasks-content">--}}
{{--                                            <span class="no-tasks-message" >No Skills To Show</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                        <div class="task-stats row ">--}}
{{--                                            <div class="tasks-count col-md-3">--}}
{{--                                                Skills <span>0</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="tasks-completed col-md-3">--}}
{{--                                                Completed <span>0</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    </form>--}}
                                </div>
                            </div>
                            <div class="col-8 ml-3">

                                <div class="col-7 ml-5"><h1><u>Account Settings</u></h1></div>
                                <div class="form-row mt-3"></div>

                                <form class=" mt-7" action="" method="post">
                                    @csrf

                                    <div class="col-12 mt-5">
                                        <div class="form-row mt-7">
                                            <div class="col-3">
                                                <h5 class="mt-2">username</h5>
                                            </div>

                                            <div class="col-8">
                                                <input type="text" class="form-control" id="inputEmail" name="username"
                                                       value="{{Auth::user()->username}} ">
                                            </div>
                                        </div>

                                        <div class="form-row mt-3">
                                            <div class="col-3">
                                                <h5 class="mt-2">Email:</h5>
                                            </div>
                                            <div class="col-8">
                                                <input type="Email " class="form-control" id="inputNumber" name="email"
                                                       value="{{Auth::user()->email}}">
                                            </div>
                                        </div>

                                        <div class="form-row mt-3">
                                            <div class="col-3">
                                                <h5 class="mt-2">Phone:</h5>
                                            </div>
                                            <div class="col-8">
                                                <input type="text-area " class="form-control" id="inputNumber"
                                                       name="phone_number" value="{{Auth::user()->phone_number}}">
                                            </div>
                                        </div>

                                        <div class="form-row mt-3">
                                            <div class="col-3">
                                                <h5 class="mt-2">Gender:</h5>
                                            </div>
                                            <div class="col-8">
                                                <input type="text-area " class="form-control" id="inputNumber" name="gender"
                                                       value="{{Auth::user()->gender->name}}">

                                            </div>
                                        </div>

                                        <div class="form-row mt-3">
                                            <div class="col-3">
                                                <h5 class="mt-2">Address:</h5>
                                            </div>
                                            <div class="col-8">
                                                <input type="text-area " class="form-control" id="inputNumber" name="address"
                                                       value="{{Auth::user()->address}}">
                                            </div>
                                        </div>

                                        <div class="form-row mt-3">
                                            <div class="col-3">
                                                <h5 class="mt-2">Education:</h5>
                                            </div>
                                            <div class="col-8">
                                                <input type="text-area " class="form-control" id="inputNumber" name="education"
                                                       value="{{Auth::user()->education}}">
                                            </div>
                                        </div>

                                        <div class="form-row mt-3">
                                            <div class="col-3">
                                                <h5 class="mt-2">Profession:</h5>
                                            </div>
                                           <div class="col-8">
                                                <input type="text-area " class="form-control" id="inputNumber" name="profession"
                                                       value="{{Auth::user()->profession}}">
                                            </div>

                                        </div>


                                        <div class="form-row mt-3">
                                            <div class="col-3">
                                                <h5 class="mt-2">Hourly Rate:</h5>
                                            </div>
                                            <div class="col-8">
                                                <input type="text-area " class="form-control" id="inputNumber"
                                                       name="Hourly_Rate" value="{{Auth::user()->Hourly_Rate}}">
                                            </div>
                                        </div>

                                        <div class="form-row mt-3">
                                            <div class="col-3">
                                                <h5 class="mt-2">Total Projects:</h5>
                                            </div>
                                            <div class="col-8">
                                                <input type="text-area " class="form-control" id="inputNumber"
                                                       name="Total_Projects" value="{{Auth::user()->Total_Projects}}">
                                            </div>
                                        </div>

                                        <div class="form-row mt-3">
                                            <div class="col-3">
                                                <h5 class="mt-2">Availability:</h5>
                                            </div>
                                            <div class="col-8">
                                                <input type="text-area " class="form-control" id="inputNumber"
                                                       name="Availability" value="{{Auth::user()->Availability}}">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-row mt-5 ">
                                        <div class="col-2 ml-5"></div>

                                        <button type="submit" onclick="clickFun()"
                                                class="btn btn-primary btn-md btn-block col-2">SAVE
                                        </button>
                                        <div class="col-5 ml-3 mt-2"><a href="ChangePassword.html" class="stretched-link"
                                                                        id="btn"><h5> Change Your Password?</h5></a></div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @endsection

        @section('more_js')
            <script>
                $(document).ready(function () {
                    $("#image").change(function () {
                        $("#imageForm").submit();
                    });
                });



                // Setting Up Variables
                // let theInput = document.querySelector(".add-task input");
                // let theAddButton = document.querySelector(".add-task .plus");
                // let tasksContainer = document.querySelector(".tasks-content");
                // let tasksCount = document.querySelector(".tasks-count span");
                // let tasksCompleted = document.querySelector(".tasks-completed span");
                //
                // // Focus On Input Field
                // window.onload = function () {
                //     theInput.focus();
                // };
                //
                // // Adding The Task
                // theAddButton.onclick = function () {
                //
                //     // If Input is Empty
                //     if (theInput.value === '') {
                //
                //         console.log("No Value");
                //
                //     } else {
                //
                //         let noTasksMsg = document.querySelector(".no-tasks-message");
                //
                //         // Check If Span With No Tasks Message Is Exist
                //         if (document.body.contains(document.querySelector(".no-tasks-message"))) {
                //
                //             // Remove No Tasks Message
                //             noTasksMsg.remove();
                //
                //         }
                //
                //         // Create Main Span Element
                //         let mainSpan = document.createElement("span");
                //
                //         // Create Delete Button
                //         let deleteElement = document.createElement("span");
                //
                //         // Create The Main Span Text
                //         let text = document.createTextNode(theInput.value);
                //
                //         // Create The Delete Button Text
                //         let deleteText = document.createTextNode("Delete");
                //
                //         // Add Text To Main Span
                //         mainSpan.appendChild(text);
                //
                //         // Add Class To Main Span
                //         mainSpan.className = 'task-box';
                //
                //         // Add Text To Delete Button
                //         deleteElement.appendChild(deleteText);
                //
                //         // Add Class To Delete Button
                //         deleteElement.className = 'delete';
                //
                //         // Add Delete Button To Main Span
                //         mainSpan.appendChild(deleteElement);
                //
                //         // Add The Task To The Container
                //         tasksContainer.appendChild(mainSpan);
                //
                //         // Empty The Input
                //         theInput.value = '';
                //
                //         // Focus On Field
                //         theInput.focus();
                //
                //         // Calculate Tasks
                //         calculateTasks();
                //
                //     }
                //
                // };
                //
                // document.addEventListener('click', function (e) {
                //
                //     // Delete Task
                //     if (e.target.className == 'delete') {
                //
                //         // Remove Current Task
                //         e.target.parentNode.remove();
                //
                //         // Check Number Of Tasks Inside The Container
                //         if (tasksContainer.childElementCount == 0) {
                //
                //             createNoTasks();
                //
                //         }
                //
                //     }
                //
                //     // Finish Task
                //     if (e.target.classList.contains('task-box')) {
                //
                //         // Toggle Class 'finished'
                //         e.target.classList.toggle("finished");
                //
                //     }
                //
                //     // Calculate Tasks
                //     calculateTasks();
                //
                // });
                //
                // // Function To Create No Tasks Message
                // function createNoTasks() {
                //
                //     // Create Message Span Element
                //     let msgSpan = document.createElement("span");
                //
                //     // Create The Text Message
                //     let msgText = document.createTextNode("No Tasks To Show");
                //
                //     // Add Text To Message Span Element
                //     msgSpan.appendChild(msgText);
                //
                //     // Add Class To Message Span
                //     msgSpan.className = 'no-tasks-message';
                //
                //     // Append The Message Span Element To The Task Container
                //     tasksContainer.appendChild(msgSpan);
                //
                // }
                //
                // // Function To Calculate Tasks
                // function calculateTasks() {
                //
                //     // Calculate All Tasks
                //     tasksCount.innerHTML = document.querySelectorAll('.tasks-content .task-box').length;
                //
                //     // Calculate Completed Tasks
                //     tasksCompleted.innerHTML = document.querySelectorAll('.tasks-content .finished').length;
                //
                // }


            </script>
        @endsection

