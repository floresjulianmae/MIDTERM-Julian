<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorite Foods</title> 
    <link rel="stylesheet" href="styles.css">
</head>
<body> 
    <header class="header">
        <h1>About Me</h1>
    </header>

    <section id="about">
        <p>I am a second-year college student, a soft-hearted girl, and 19 years old. I may not be the smartest in technology, but I confidently share what I’ve learned from the course I pursue.</p>
        <p>I’m an understanding person—you can share your problems with me, and I’ll gladly listen and offer advice.</p>
    </section>

    <fieldset class="favorite-section">
        <legend>Foods I Love</legend>
        <input type="checkbox" id="chicken" name="food" value="chicken">
        <label for="chicken">Chicken</label><br>
        <input type="checkbox" id="crab" name="food" value="crab">
        <label for="crab">Crab</label><br>
        <input type="checkbox" id="shrimp" name="food" value="shrimp">
        <label for="shrimp">Shrimp</label><br>
        <input type="checkbox" id="adobo" name="food" value="adobo">
        <label for="adobo">Adobo</label>
    </fieldset>

    <fieldset class="favorite-section">
        <legend>Drinks I Enjoy</legend>
        <input type="checkbox" id="coke" name="drink" value="coke">
        <label for="coke">Coke</label><br>
        <input type="checkbox" id="ice-coffee" name="drink" value="ice-coffee">
        <label for="ice-coffee">Ice Coffee</label><br>
        <input type="checkbox" id="latte" name="drink" value="latte">
        <label for="latte">Latte</label>
    </fieldset>

    <section id="personality">
        <h2>My Personality</h2>
        <ul>
            <li><strong>Clingy:</strong> I value close relationships and enjoy spending time with friends.</li>
            <li><strong>Kind:</strong> I always try to help others and treat people with respect.</li>
            <li><strong>Helpful:</strong> If you need advice or someone to talk to, I’ll always lend an ear.</li>
        </ul>
    </section>

    <button type="submit">Submit</button>
</body>
</html>