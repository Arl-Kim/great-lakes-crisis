if ( is_user_logged_in() ) : ?>
  <p>
    Mr. Nsiku's career includes significant experience with Amnesty International's East Africa Regional Office (EARO), where he focused on issues pertaining to the Democratic Republic of Congo. He now serves 
    <span>
      as the International Relations Manager at African Desk, a Pan-African organization Headquartered in Dar-es-Salaam, the United Republic of Tanzania. In addition, he works remotely as an Inspector for the Universal Action for the Defense of Human Rights, based in the Democratic Republic of Congo.
    </span>
  </p>
<?php else : ?>
  <p>
    Mr. Nsiku's career includes significant experience with Amnesty International's East Africa Regional Office (EARO), where he focused on issues pertaining to the Democratic Republic of Congo. He now serves 
    <span class="blurred-text">
      as the International Relations Manager at African Desk, a Pan-African organization Headquartered in Dar-es-Salaam, the United Republic of Tanzania. In addition, he works remotely as an Inspector for the Universal Action for the Defense of Human Rights, based in the Democratic Republic of Congo.
    </span>
    <a href="https://greatlakescrisis.org/register/" id="subscribe_link">Subscribe For More</a>
  </p>

  <style>
    .blurred-text {
      filter: blur(4px);
      transition: filter 0.3s ease;
      position: relative;
    }

    #subscribe_link {
      background: #053f5c;
      color: #f27f0c;
      padding: 10px 30px;
      border-radius: 10px;
      font-weight: 700;
      text-decoration: none;
      cursor: pointer;
      transition: all 400ms ease-in-out;
    }

    #subscribe_link:hover {
      background: #f27f0c;
      color: #053f5c;
    }
  </style>

<?php endif;