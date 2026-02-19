<?php
$pageTitle = 'Renova | Contact Us';
$metaDescription = 'Contact Renova Creative for web development, systems, and design. Start a project or get a quote. Technology and design partner for your business.';
$metaKeywords = 'contact Renova, start a project, web development quote, systems development, Malawi';
include '../includes/head.php';
include '../includes/navbar.php';

$formSuccess = null;
$formError = null;
$formData = ['firstName' => '', 'surname' => '', 'email' => '', 'phone' => '', 'message' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = trim($_POST['firstName'] ?? '');
    $surname = trim($_POST['surname'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $message = trim($_POST['message'] ?? '');

    $formData = ['firstName' => $firstName, 'surname' => $surname, 'email' => $email, 'phone' => $phone, 'message' => $message];

    $errors = [];
    if ($firstName === '') $errors[] = 'First name is required.';
    if ($surname === '') $errors[] = 'Surname is required.';
    if ($email === '') {
        $errors[] = 'Email is required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Please enter a valid email address.';
    }
    if ($phone === '') $errors[] = 'Phone is required.';
    if ($message === '') $errors[] = 'Message is required.';

    if (empty($errors)) {
        $to = 'connect.renova@gmail.com';
        $subject = 'Renova Contact Form: Message from ' . $firstName . ' ' . $surname;
        $body = "Name: " . $firstName . " " . $surname . "\n";
        $body .= "Email: " . $email . "\n";
        $body .= "Phone: " . $phone . "\n\n";
        $body .= "Message:\n" . $message;
        $headers = "From: connect.renova@gmail.com\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        if (@mail($to, $subject, $body, $headers)) {
            $formSuccess = 'Thank you! Your message has been sent. We will get back to you soon.';
            $formData = ['firstName' => '', 'surname' => '', 'email' => '', 'phone' => '', 'message' => ''];
        } else {
            $formError = 'Sorry, we could not send your message. Please try again or email us directly at connect.renovamw.com.';
        }
    } else {
        $formError = implode(' ', $errors);
    }
}
?>
<!--Hero-->
<section id="hero" class="mx-auto px-5">
  <div
    class="relative flex flex-col bg-renova-gradient from-renovaBlue to-renovaBrightBlue justify-center items-center py-19 mx-auto w-full rounded-2xl overflow-hidden px-5">
    <!-- Mobile background image overlay -->
    <div class="md:hidden absolute inset-0 bg-cover bg-center bg-no-repeat rounded-2xl other-hero-bg"></div>
    <!-- Gradient overlay for mobile -->
    <div class="md:hidden absolute inset-0 bg-renova-gradient from-renovaBlue to-renovaBrightBlue opacity-70 rounded-2xl z-0"></div>
    <!-- Desktop background image overlay -->
    <div class="hidden md:block absolute inset-0 bg-cover bg-center bg-no-repeat rounded-2xl other-hero-bg"></div>
    <!-- Gradient overlay for desktop -->
    <div class="hidden md:block absolute inset-0 bg-renova-gradient from-renovaBlue to-renovaBrightBlue opacity-70 rounded-2xl z-0"></div>
    <div class="max-w-7xl mx-auto ">
    <div class="bg-renovaPaleWhite px-7 py-2 border-2 rounded-full border-solid border-white mb-10 animate-on-scroll fade-in-up max-w-[250px] mx-auto">
      <h2 class="text-center text-white text-3xl">Contact Us</h2>
    </div>
    <img loading="lazy" src="../assets/images/Ellipse 8.svg" alt="Ellipse"
      class="absolute z-50 top-0 ml-16 mt-7 md:ml-56 md:mt-20 left-0 pointer-events-none animate-on-scroll fade-in" />
    <img loading="lazy" src="../assets/images/Group 6.svg" alt="Ellipse"
      class="absolute z-50 bottom-0 mr-20 mb-10 md:mr-40 md:mb-14 right-0 pointer-events-none animate-on-scroll fade-in" />
    <h1 class="text-white text-center justify-center text-4xl font-bold max-w-3xl animate-on-scroll fade-in-up">
      We're Just a Message Away From Transforming Your Brand
    </h1>
    </div>
  </div>
</section>
<section id="contact-form" class="max-w-7xl mx-auto py-20 px-5">
  <div class="max-w-5xl mx-auto">
    <div class="flex flex-col lg:flex-row gap-8">
      <!-- Left Panel - Information Section -->
      <div class="lg:w-1/2 rounded-4xl p-10 lg:p-12 animate-on-scroll fade-in-left" style="background: linear-gradient(135deg, hsl(259, 73%, 28%), hsl(259, 80%, 39%));">
        <div class="mb-6 bg-renovaGreen text-renovaBlue px-6 py-3 rounded-full font-semibold text-xl max-w-38 items-center">
          <p class="text-center">Talk to us</p>
        </div>
        <h2 class="text-renovaGreen text-3xl font-semibold mb-6">
          Have a Project in Mind? Let's Talk Solutions
        </h2>
        <p class="text-white text-xl mb-10 leading-relaxed">
        At Renova, we’re problem solvers first. Whether you need systems that scale, designs that inspire, or strategies that move your business forward, we build solutions that make a difference. Reach out today and let’s shape the future together.
        </p>
        
        <div class="space-y-6">
          <!-- Phone Contact -->
          <div class="flex items-center gap-4">
            <div class="w-14 h-14 bg-renovaGreen rounded-full flex items-center justify-center flex-shrink-0">
              <i class="fas fa-phone text-white text-2xl"></i>
            </div>
            <div>
              <p class="text-white mb-1 text-sm md:text-base">CALL/WHATSAPP</p>
              <a href="tel:+265992353009" class="text-white md:text-xl text-base hover:text-renovaGreen transition-colors">+265 992 353 009</a>
            </div>
          </div>
          
          <!-- Email Contact -->
          <div class="flex items-center gap-4">
            <div class="w-14 h-14 bg-renovaGreen rounded-full flex items-center justify-center flex-shrink-0">
              <i class="fas fa-envelope text-white text-2xl"></i>
            </div>
            <div>
              <p class="text-white mb-1 text-sm md:text-base">EMAIL US</p>
              <a href="mailto:connect.renova@gmail.com" class="text-white text-xl hover:text-renovaGreen transition-colors md:text-xl text-sm ">connect@renovamw.com</a>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Right Panel - Contact Form -->
      <div class="lg:w-1/2 animate-on-scroll fade-in-right">
        <div class="mb-6 bg-gray-200 text-renovaBlue px-6 py-3 rounded-full border border-renovaBlue font-semibold text-xl mb-4 max-w-38">
          <p class="text-center">Reach Out</p>
        </div>
        <h2 class="text-renovaBlue text-3xl font-semibold mb-4">
          Message Us
        </h2>
        <p class="text-gray-600 mb-8 text-xl">
          Please fill out the form below with your details and message, and our team will get back to you as soon as possible
        </p>

        <?php if ($formSuccess): ?>
          <div class="mb-6 p-4 rounded-xl bg-green-100 text-green-800 border border-green-200" role="alert">
            <?php echo htmlspecialchars($formSuccess); ?>
          </div>
        <?php endif; ?>
        <?php if ($formError): ?>
          <div class="mb-6 p-4 rounded-xl bg-red-100 text-red-800 border border-red-200" role="alert">
            <?php echo htmlspecialchars($formError); ?>
          </div>
        <?php endif; ?>
        
        <form method="post" action="" class="space-y-6">
          <!-- First Name and Surname -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <input 
                type="text" 
                id="firstName" 
                name="firstName" 
                placeholder="First Name*" 
                value="<?php echo htmlspecialchars($formData['firstName']); ?>"
                required
                class="w-full px-4 py-3 border border-renovaBlue rounded-xl focus:outline-none focus:ring-2 focus:ring-renovaGreen text-gray-700 placeholder-gray-400"
              />
            </div>
            <div>
              <input 
                type="text" 
                id="surname" 
                name="surname" 
                placeholder="Surname*" 
                value="<?php echo htmlspecialchars($formData['surname']); ?>"
                required
                class="w-full px-4 py-3 border border-renovaBlue rounded-xl focus:outline-none focus:ring-2 focus:ring-renovaGreen text-gray-700 placeholder-gray-400"
              />
            </div>
          </div>
          
          <!-- Email and Phone -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <input 
                type="email" 
                id="email" 
                name="email" 
                placeholder="Email*" 
                value="<?php echo htmlspecialchars($formData['email']); ?>"
                required
                class="w-full px-4 py-3 border border-renovaBlue rounded-xl focus:outline-none focus:ring-2 focus:ring-renovaGreen text-gray-700 placeholder-gray-400"
              />
            </div>
            <div>
              <input 
                type="tel" 
                id="phone" 
                name="phone" 
                placeholder="Phone*" 
                value="<?php echo htmlspecialchars($formData['phone']); ?>"
                required
                class="w-full px-4 py-3 border border-renovaBlue rounded-xl focus:outline-none focus:ring-2 focus:ring-renovaGreen text-gray-700 placeholder-gray-400"
              />
            </div>
          </div>
          
          <!-- Message -->
          <div>
            <textarea 
              id="message" 
              name="message" 
              rows="6" 
              placeholder="Message*" 
              required
              class="w-full px-4 py-3 border border-renovaBlue rounded-xl focus:outline-none focus:ring-2 focus:ring-renovaGreen text-gray-700 placeholder-gray-400 resize-none"
            ><?php echo htmlspecialchars($formData['message']); ?></textarea>
          </div>
          
          <!-- Submit Button -->
          <button 
            type="submit" 
            class="w-full bg-renovaGreen text-renovaBlue px-6 py-4 rounded-2xl font-semibold text-xl hover:bg-renovaBrightGreen transition-colors duration-200"
          >
            Send Message
          </button>
        </form>
      </div>
    </div>
  </div>
</section>
<?php include '../includes/footer.php'; ?>
