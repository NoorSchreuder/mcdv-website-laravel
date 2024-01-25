    @extends('layouts.layout')

    @section('content')
        <!-- Contact Section Begin -->
        <section class="contact-section spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact-text">
                            <h2>Contactinformmatie</h2>
                            <p>Wil je contact met ons opnemen? Vul het contactformulier in en we nemen contact met u op!</p>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="c-o">Address:</td>
                                        <td>Via del Furioso, 28, 06057 Monte Castello di Vibio</td>
                                    </tr>
                                    <tr>
                                        <td class="c-o">Phone:</td>
                                        <td>+31 6 81 02 29 85</td>
                                    </tr>
                                    <tr>
                                        <td class="c-o">Email:</td>
                                        <td>ilbanditoarancione@gmail.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-7 offset-lg-1">
                        <form action="{{ url('/contact') }}" method="post" class="contact-form">
                            @csrf <!-- Add this to include CSRF protection -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" name="name" placeholder="Naam" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="email" placeholder="E-mailadres" required>
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" name="phone" placeholder="Telefoonnummer" required>
                                </div>
                                <div class="col-lg-12">
                                    <textarea name="message" placeholder="Uw bericht"></textarea>
                                    <button type="submit" name="submit">Versturen</button>
                                </div>
                            </div>
                        </form>
                        <!-- resources/views/contact.blade.php -->
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                    </div>
                </div>

                <!-- resources/views/contact.blade.php -->
                @if (session('success'))
                    <div>{{ session('success') }}</div>
                @endif

                <!-- ... (existing form code) ... -->

                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2926.324982955095!2d12.357840376133353!3d42.82374857115359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132ebf4526b0ade3%3A0x837904989b530011!2sVia%20Del%20Furioso%2C%2028%2C%2006057%20Monte%20Castello%20di%20Vibio%20PG%2C%20Itali%C3%AB!5e0!3m2!1snl!2snl!4v1692913813818!5m2!1snl!2snl"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                        height="470" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </section>
        <!-- Contact Section End -->
    @endsection

    @section('footer')
    @endsection
