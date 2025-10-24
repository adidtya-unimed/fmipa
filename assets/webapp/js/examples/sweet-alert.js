'use strict';
// $(document).ready(function () {

//     $('.sweetAlert2-example1').on('click', function () {
//         Swal.fire('Any fool can use a computer')
//     });

//     $('.sweetAlert2-example2').on('click', function () {
//         Swal.fire(
//             'The Internet?',
//             'That thing is still around?',
//             'question'
//         )
//     });

//     $('.sweetAlert2-example2-success').on('click', function () {
//         Swal.fire({
//             icon: 'success',
//             title: 'Success!',
//             text: 'Process completed!'
//         })
//     });

//     $('.sweetAlert2-example2-warning').on('click', function () {
//         Swal.fire({
//             icon: 'warning',
//             title: 'Hey...',
//             text: 'Something went wrong!'
//         })
//     });

//     $('.sweetAlert2-example2-error').on('click', function () {
//         Swal.fire({
//             icon: 'error',
//             title: 'Oops...',
//             text: 'Something went wrong!'
//         })
//     });

//     $('.sweetAlert2-example2-info').on('click', function () {
//         Swal.fire({
//             icon: 'info',
//             title: 'Info',
//             text: 'Not active now!'
//         })
//     });

//     $('.sweetAlert2-example3').on('click', function () {
//         Swal.fire({
//             icon: 'error',
//             title: 'Oops...',
//             text: 'Something went wrong!',
//             footer: '<a href>Why do I have this issue?</a>'
//         })
//     });

//     $('.sweetAlert2-example4').on('click', function () {
//         Swal.fire({
//             title: '<strong>HTML <u>example</u></strong>',
//             icon: 'info',
//             html:
//                 'You can use <b>bold text</b>, ' +
//                 '<a href="//sweetalert2.github.io">links</a> ' +
//                 'and other HTML tags',
//             showCloseButton: true,
//             showCancelButton: true,
//             focusConfirm: false,
//             confirmButtonText:
//                 '<i class="bi bi-hand-thumbs-up"></i> Great!',
//             confirmButtonAriaLabel: 'Thumbs up, great!',
//             cancelButtonText:
//                 '<i class="bi bi-hand-thumbs-down"></i>',
//             cancelButtonAriaLabel: 'Thumbs down'
//         })
//     });

//     $('.sweetAlert2-example5').on('click', function () {
//         Swal.fire({
//             title: 'Do you want to save the changes?',
//             showDenyButton: true,
//             showCancelButton: true,
//             confirmButtonText: `Save`,
//             denyButtonText: `Don't save`,
//         }).then((result) => {
//             /* Read more about isConfirmed, isDenied below */
//             if (result.isConfirmed) {
//                 Swal.fire('Saved!', '', 'success')
//             } else if (result.isDenied) {
//                 Swal.fire('Changes are not saved', '', 'info')
//             }
//         })
//     });

//     $('.sweetAlert2-example6').on('click', function () {
//         Swal.fire({
//             position: 'top-end',
//             icon: 'success',
//             title: 'Your work has been saved',
//             showConfirmButton: false,
//             timer: 1500
//         })
//     });

//     $('.sweetAlert2-example7').on('click', function () {
//         Swal.fire({
//             title: 'Custom animation with Animate.css',
//             showClass: {
//                 popup: 'animate__animated animate__fadeInDown'
//             },
//             hideClass: {
//                 popup: 'animate__animated animate__fadeOutUp'
//             }
//         })
//     });

//     $('.sweetAlert2-example8').on('click', function () {
//         Swal.fire({
//             title: 'Are you sure?',
//             text: "You won't be able to revert this!",
//             icon: 'warning',
//             showCancelButton: true,
//             confirmButtonColor: '#3085d6',
//             cancelButtonColor: '#d33',
//             confirmButtonText: 'Yes, delete it!'
//         }).then((result) => {
//             if (result.isConfirmed) {
//                 Swal.fire(
//                     'Deleted!',
//                     'Your file has been deleted.',
//                     'success'
//                 )
//             }
//         })
//     });

//     $('.sweetAlert2-example9').on('click', function () {
//         Swal.mixin({
//             input: 'text',
//             confirmButtonText: 'Next &rarr;',
//             showCancelButton: true,
//             progressSteps: ['1', '2', '3']
//         }).queue([
//             {
//                 title: 'Question 1',
//                 text: 'Chaining swal2 modals is easy'
//             },
//             'Question 2',
//             'Question 3'
//         ]).then((result) => {
//             if (result.value) {
//                 const answers = JSON.stringify(result.value)
//                 Swal.fire({
//                     title: 'All done!',
//                     html: `
//         Your answers:
//         <pre><code>${answers}</code></pre>
//       `,
//                     confirmButtonText: 'Lovely!'
//                 })
//             }
//         })
//     });

//     $('.sweetAlert2-example10').on('click', function () {
//         const ipAPI = '//api.ipify.org?format=json'

//         Swal.queue([{
//             title: 'Your public IP',
//             confirmButtonText: 'Show my public IP',
//             text:
//                 'Your public IP will be received ' +
//                 'via AJAX request',
//             showLoaderOnConfirm: true,
//             preConfirm: () => {
//                 return fetch(ipAPI)
//                     .then(response => response.json())
//                     .then(data => Swal.insertQueueStep(data.ip))
//                     .catch(() => {
//                         Swal.insertQueueStep({
//                             icon: 'error',
//                             title: 'Unable to get your public IP'
//                         })
//                     })
//             }
//         }])
//     });

// });

const Swal2 = Swal.mixin({
    customClass: {
        input: 'form-control'
    }
})

const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})




document.getElementById("basic").addEventListener("click", (e) => {
    Swal2.fire("Any fool can use a computer")
})
document.getElementById("footer").addEventListener("click", (e) => {
    Swal2.fire({
        icon: "error",
        title: "Oops...",
        text: "Something went wrong!",
        footer: "<a href>Why do I have this issue?</a>",
    })
})
document.getElementById("title").addEventListener("click", (e) => {
    Swal2.fire("The Internet?", "That thing is still around?", "question")
})
document.getElementById("success").addEventListener("click", (e) => {
    Swal2.fire({
        icon: "success",
        title: "Success",
    })
})
document.getElementById("error").addEventListener("click", (e) => {
    Swal2.fire({
        icon: "error",
        title: "Error",
    })
})
document.getElementById("warning").addEventListener("click", (e) => {
    Swal2.fire({
        icon: "warning",
        title: "Warning",
    })
})
document.getElementById("info").addEventListener("click", (e) => {
    Swal2.fire({
        icon: "info",
        title: "Info",
    })
})
document.getElementById("question").addEventListener("click", (e) => {
    Swal2.fire({
        icon: "question",
        title: "Question",
    })
})
document.getElementById("text").addEventListener("click", (e) => {
    Swal2.fire({
        title: "Enter your IP address",
        input: "text",
        inputLabel: "Your IP address",
        showCancelButton: true,
    })
})
document.getElementById("email").addEventListener("click", async (e) => {
    const { value: email } = await Swal2.fire({
        title: "Input email address",
        input: "email",
        inputLabel: "Your email address",
        inputPlaceholder: "Enter your email address",
    })

    if (email) {
        Swal2.fire(`Entered email: ${email}`)
    }
})
document.getElementById("url").addEventListener("click", async (e) => {
    const { value: url } = await Swal2.fire({
        input: "url",
        inputLabel: "URL address",
        inputPlaceholder: "Enter the URL",
    })

    if (url) {
        Swal2.fire(`Entered URL: ${url}`)
    }
})
document.getElementById("password").addEventListener("click", async (e) => {
    const { value: password } = await Swal2.fire({
        title: "Enter your password",
        input: "password",
        inputLabel: "Password",
        inputPlaceholder: "Enter your password",
        inputAttributes: {
            maxlength: 10,
            autocapitalize: "off",
            autocorrect: "off",
        },
    })

    if (password) {
        Swal2.fire(`Entered password: ${password}`)
    }
})
document.getElementById("textarea").addEventListener("click", async (e) => {
    const { value: text } = await Swal2.fire({
        input: "textarea",
        inputLabel: "Message",
        inputPlaceholder: "Type your message here...",
        inputAttributes: {
            "aria-label": "Type your message here",
        },
        showCancelButton: true,
    })

    if (text) {
        Swal2.fire(text)
    }
})
document.getElementById("select").addEventListener("click", async (e) => {
    const { value: fruit } = await Swal2.fire({
        title: "Select field validation",
        input: "select",
        inputOptions: {
            Fruits: {
                apples: "Apples",
                bananas: "Bananas",
                grapes: "Grapes",
                oranges: "Oranges",
            },
            Vegetables: {
                potato: "Potato",
                broccoli: "Broccoli",
                carrot: "Carrot",
            },
            icecream: "Ice cream",
        },
        inputPlaceholder: "Select a fruit",
        showCancelButton: true,
        inputValidator: (value) => {
            return new Promise((resolve) => {
                if (value === "oranges") {
                    resolve()
                } else {
                    resolve("You need to select oranges :)")
                }
            })
        },
    })

    if (fruit) {
        Swal2.fire(`You selected: ${fruit}`)
    }
})

// Toasts
document.getElementById('toast-success').addEventListener('click', () => {
    Toast.fire({
        icon: 'success',
        title: 'Signed in successfully'
    })
})
document.getElementById('toast-warning').addEventListener('click', () => {
    Toast.fire({
        icon: 'warning',
        title: 'Please input your email'
    })
})
document.getElementById('toast-failed').addEventListener('click', () => {
    Toast.fire({
        icon: 'error',
        title: 'Transaction error. Please try again later'
    })
})