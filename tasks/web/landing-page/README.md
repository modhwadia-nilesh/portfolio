## Getting Started

Installation

```bash
npm install
```

First, run the development server:

```bash
npm run dev
# or
yarn dev
# or
pnpm dev
# or
bun dev
```

Open [http://localhost:3000](http://localhost:3000) with your browser to see the result.

### WordPress Plugin Installation and Setup

#### Installation

1. Convert the plugin folder into a zip file.
2. Log in to your WordPress admin panel.
3. Navigate to the **Plugins** menu and click **Add New**.
4. Click **Upload Plugin** at the top of the page.
5. Select the plugin zip file from your computer and click **Install Now**.
6. Once the plugin is installed, click **Activate Plugin**.

#### Setup

1. After activating the plugin, navigate to the all user by clicking on **Users** > **All Users**.
2. Click on **Edit** User. Scroll down to the **Application Passwords** section in your profile.
3. You will see a field to create a new application password. Enter a descriptive name for the application to create the password (e.g., "Form Submission").
4. Click the **Add New Application Password** button.
5. A new password will be generated and displayed on the screen. This is the only time you will see the password. Copy this password and store it securely.

#### Environment Variables

Create a .env file in the root of your project and add the following environment variables with your details:

```bash
NEXT_PUBLIC_APP_CONTACT_API=<your_api_url>
NEXT_PUBLIC_APP_USERNAME=<your_username>
NEXT_PUBLIC_APP_PASSWORD=<your_password>
```

1. **<your_api_url>** should be set to your site URL followed by /wp-json/v1/contact-form. For example, if your site URL is https://example.com, then your API URL should be https://example.com/wp-json/v1/contact-form.
2. **<your_username>** should be your actual username of wordpress.
3. **<your_password>** should be a generated Application password from wordpress.