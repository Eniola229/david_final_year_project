 <?php
                if (isset($_GET['status'])) {
                    $errorCode = htmlspecialchars($_GET['status']); // Sanitize input
                    switch ($errorCode) {
                        case 'stmtfailed':
                            echo '<p style="color: red; font-weight: bold;no  font-weight: bold; text-align: center;">An unexpected error occurred!</p>';
                            break;
                        case 'emptyInput':
                            echo '<p style="color: red; font-weight: bold; text-align: center;">All fields are required!</p>';
                            break;
                        case 'loginfailed':
                            echo '<p style="color: red; font-weight: bold; text-align: center;">Invalid Email or Password</p>';
                            break;
                        case 'invalidfiletype':
                            echo '<p style="color:red; font-weight: bold; text-align:center">Invalid Image Uploaded</p>';
                            break;
                        case 'invalidAttempit':
                             echo '<p style="color:red; font-weight: bold; text-align:center">Invalid Attempt</p>';
                            break;
                        case 'emailsent':
                             echo '<p style="color:red; font-weight: bold; text-align:center">Registration Successfull! Kindly check your Email and Login</p>';
                            break;
                        case 'emailNotMatch':
                             echo '<p style="color:red; font-weight: bold; text-align:center">Email And Confirm Email Are not the same </p>';
                            break;
                          case 'passwordNotMatch':
                             echo '<p style="color:red; font-weight: bold; text-align:center">Password And Confirm Password Are not the same </p>';
                            break;
                        case 'ppnotuploaded':
                        echo '<p style="color:red; font-weight: bold; text-align:center">Profile Pucture Must Be Uploaded</p>';
                            break;
                        case 'sentemailfailed':
                             echo '<p style="color:red; font-weight: bold; text-align:center">Error Sending you an  E-Mail</p>';
                            echo '<p style="color:green; font-weight: bold; text-align:center">Registration Succesfull Kindly Login</p>';
                            break;
                        case 't_success':
                            echo '<p style="color:green; font-weight: bold; text-align:center">Therapist Added Successfully</p>';
                            break;
                        case 'allfieldrequired': 
                            echo '<p style="color:red; font-weight: bold; text-align:center">All fields are required</p>';
                            break;
                        case 'fileuploadfailed':
                            echo '<p style="color:red; font-weight: bold; text-align:center">Error Occured while trying to upload Profile Picture Pleasecheck you internet connecttion and try again</p>';
                            break;
                        case 'useroremailtaken':
                            echo '<p style="color:red; font-weight: bold; text-align:center">Email Already taken</p>';
                            break;
                        case 'co_deleted':
                            echo '<p style="color:red; font-weight: bold; text-align:center">Course Successfully deleted</p>';
                            break;
                        case 'course_success':
                            echo '<p style="color:green; font-weight: bold; text-align:center">Course Uploaded Succesfully</p>';
                            break;
                        case 'm_success':
                            echo '<p style="color:green; font-weight: bold; text-align:center">Material Uploaded Succesfully</p>';
                            break;
                        case 'invalidMatricNo': 
                            echo '<p style="color:red; font-weight: bold; text-align:center">Invalid Matric Number</p>';
                            break;
                        default:
                            // Log unrecognized error codes for debugging
                            error_log("Unrecognized error code: $errorCode");
                            echo '<p style="color: red; text-align: center;">An unexpected error occurred! Please try again later.</p>';
                            break;
                    }
               }
                    ?>