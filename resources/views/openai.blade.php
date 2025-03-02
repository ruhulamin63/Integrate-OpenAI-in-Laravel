<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ask OpenAI</title>
</head>
<body>
    <h1>Ask OpenAI</h1>
    <form method="POST" action="{{ url('/ask-openai') }}">
        @csrf
        <input type="text" name="prompt" placeholder="Enter your question">
        <button type="submit">Ask</button>
    </form>
</body>
</html>