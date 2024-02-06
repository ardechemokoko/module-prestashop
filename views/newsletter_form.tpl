{if !isset($success)}
    <form action="{$module_dir}submit_newsletter.php" method="post">
        <input type="email" name="email" placeholder="Entrez votre adresse email" required>
        <button type="submit">S'abonner</button>
    </form>
{else}
    <p>Merci de vous être abonné à notre newsletter!</p>
{/if}
