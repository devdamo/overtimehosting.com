<x-app-layout>


        <div class="container mt-4">
            <h2>Select a Channel to Send a Message</h2>

            <!-- Button to fetch channels -->
            <button id="fetch-channels" class="btn btn-primary mb-3">Fetch Channels</button>

            <!-- Dropdown for channels -->
            <select id="channel-list" class="form-control mb-3">
                <option value="">Select a Channel</option>
            </select>

            <!-- Message input -->
            <textarea id="message-input" class="form-control mb-3" placeholder="Enter your message here"></textarea>

            <!-- Button to send message -->
            <button id="send-message" class="btn btn-success">Send Message</button>
        </div>

        <!-- Include jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script>
            $(document).ready(function () {
                // Fetch channels when the button is clicked
                $.ajax({
                    url: "{{ route('admin.mattermost.channels') }}", // Correct route name
                    method: 'GET',
                    success: function (response) {
                        if (response.success) {
                            $('#channel-list').empty().append('<option value="">Select a Channel</option>');
                            response.channels.forEach(function (channel) {
                                $('#channel-list').append('<option value="' + channel.id + '">' + channel.display_name + '</option>');
                            });
                        } else {
                            alert('Failed to fetch channels: ' + response.error);
                        }
                    },
                    error: function () {
                        alert('Error fetching channels.');
                    }
                });


                // Send message when the send button is clicked
                $('#send-message').click(function () {
                    let channelId = $('#channel-list').val();
                    let message = $('#message-input').val();

                    if (!channelId || !message) {
                        alert('Please select a channel and enter a message.');
                        return;
                    }

                    $.ajax({
                        url: "{{ route('admin.mattermost.send') }}",
                        method: 'POST',
                        data: {
                            _token: "{{ csrf_token() }}",
                            channel_id: channelId,
                            message: message,
                        },
                        success: function (response) {
                            if (response.success) {
                                alert('Message sent successfully!');
                            } else {
                                alert('Failed to send message: ' + response.error);
                            }
                        },
                        error: function () {
                            alert('Error sending message.');
                        }
                    });
                });
            });
        </script>
</x-app-layout>
