<div>
    <div class="bg-gray-100">
        <div class="container mx-auto px-6 py-8">
            <div class="bg-slate-200 p-8 rounded shadow-lg">
                <!-- Header -->
                <h1 class="text-2xl font-bold text-gray-800 mb-6">Contact Information</h1>

                <!-- Contact Form -->
                <form action="" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Left Column -->
                        <div>
                            <!-- First Name -->
                            <div class="mb-4">
                                <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
                                <input type="text" id="first_name" name="first_name" class="mt-1 px-4 block w-full rounded-md border-gray-300 shadow-sm  py-2">
                            </div>

                            <!-- Account Name -->
                            <div class="mb-4">
                                <label for="account_name" class="block text-sm font-medium text-gray-700">Account Name</label>
                                <input type="text" id="account_name" name="account_name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm  py-2">
                            </div>

                            <!-- Email -->
                            <div class="mb-4">
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" id="email" name="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm  py-2">
                            </div>

                            <!-- Phone -->
                            <div class="mb-4">
                                <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                                <input type="text" id="phone" name="phone" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm py-2">
                            </div>

                            <!-- Mobile -->
                            <div class="mb-4">
                                <label for="mobile" class="block text-sm font-medium text-gray-700">Mobile</label>
                                <input type="text" id="mobile" name="mobile" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm  py-2">
                            </div>

                            <!-- Assistant -->
                            <div class="mb-4">
                                <label for="assistant" class="block text-sm font-medium text-gray-700">Assistant</label>
                                <input type="text" id="assistant" name="assistant" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm py-2">
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div>
                            <!-- Lead Source -->
                            <div class="mb-4">
                                <label for="lead_source" class="block text-sm font-medium text-gray-700">Lead Source</label>
                                <select id="lead_source" name="lead_source" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm  py-2">
                                    <option value="None">None</option>
                                    <option value="Referral">Referral</option>
                                </select>
                            </div>

                            <!-- Last Name -->
                            <div class="mb-4">
                                <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
                                <input type="text" id="last_name" name="last_name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm  py-2">
                            </div>

                            <!-- Vendor Name -->
                            <div class="mb-4">
                                <label for="vendor_name" class="block text-sm font-medium text-gray-700">Vendor Name</label>
                                <input type="text" id="vendor_name" name="vendor_name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm py-2">
                            </div>

                            <!-- Title -->
                            <div class="mb-4">
                                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                                <input type="text" id="title" name="title" class="mt-1 py-2 block w-full rounded-md border-gray-300 shadow-sm ">
                            </div>

                            <!-- Department -->
                            <div class=" mb-4">
                                <label for="department" class="block text-sm font-medium text-gray-700">Department</label>
                                <input type="text" id="department" name="department" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm py-2">
                            </div>
                        </div>
                    </div>

                    <!--  Address Information -->

                    <h2 class="text-xl font-semibold mb-6">Address Information</h2>


                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Mailing Address -->
                        <div>
                            <div class="mb-4">
                                <label for="mailing_street" class="block text-sm font-medium text-gray-700">Mailing Street</label>
                                <input type="text" id="mailing_street" name="mailing_street" class="mt-1 py-2 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                            <div class="mb-4">
                                <label for="mailing_city" class="block text-sm font-medium text-gray-700">Mailing City</label>
                                <input type="text" id="mailing_city" name="mailing_city" class="mt-1 py-2 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                            <div class="mb-4">
                                <label for="mailing_state" class="block text-sm font-medium text-gray-700">Mailing State</label>
                                <input type="text" id="mailing_state" name="mailing_state" class="mt-1 py-2 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                            <div class="mb-4">
                                <label for="mailing_zip" class="block text-sm font-medium text-gray-700">Mailing Zip</label>
                                <input type="text" id="mailing_zip" name="mailing_zip" class="mt-1  py-2 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                            <div class="mb-4">
                                <label for="mailing_country" class="block text-sm font-medium text-gray-700">Mailing Country</label>
                                <input type="text" id="mailing_country" name="mailing_country" class="mt-1  py-2 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                        </div>

                        <!-- Other Address -->
                        <div>
                            <div class="mb-4">
                                <label for="other_street" class="block text-sm font-medium text-gray-700">Other Street</label>
                                <input type="text" id="other_street" name="other_street" class="mt-1  py-2 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                            <div class="mb-4">
                                <label for="other_city" class="block text-sm font-medium text-gray-700">Other City</label>
                                <input type="text" id="other_city" name="other_city" class="mt-1  py-2 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                            <div class="mb-4">
                                <label for="other_state" class="block text-sm font-medium text-gray-700">Other State</label>
                                <input type="text" id="other_state" name="other_state" class="mt-1  py-2 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                            <div class="mb-4">
                                <label for="other_zip" class="block text-sm font-medium text-gray-700">Other Zip</label>
                                <input type="text" id="other_zip" name="other_zip" class="mt-1  py-2 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                            <div class="mb-4">
                                <label for="other_country" class="block text-sm font-medium text-gray-700">Other Country</label>
                                <input type="text" id="other_country" name="other_country" class="mt-1  py-2 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                        </div>
                    </div>
                    <!-- Submit Button -->
                    <div class="mt-6">
                        <button type="submit" class="px-4 py-2 bg-slate-600 text-white rounded shadow-sm">
                            Save Contact
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>