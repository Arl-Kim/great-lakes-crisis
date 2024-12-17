<?php

if ( is_user_logged_in() ) : ?>
  <p>
    Mr. Nsiku's career includes significant experience with Amnesty International's East Africa Regional Office (EARO), where he focused on issues pertaining to the Democratic Republic of Congo. He now serves 
    <span>
      as the International Relations Manager at African Desk, a Pan-African organization Headquartered in Dar-es-Salaam, the United Republic of Tanzania. In addition, he works remotely as an Inspector for the Universal Action for the Defense of Human Rights, based in the Democratic Republic of Congo.
    </span>
  </p>
<?php else : ?>
  <div class="restricted-content">
    <div class="restricted-paragraph">
      <p>
        Mr. Nsiku's career includes significant experience with Amnesty International's East Africa Regional Office (EARO), where he focused on issues pertaining to the Democratic Republic of Congo. He now serves 
        <span class="blurred-text">
          as the International Relations Manager & Personal Assistant to the Executive Chairman at African Desk, a Pan-African organization Headquartered in Dar-es-Salaam, the United Republic of Tanzania. In addition, he works remotely as an Inspector for the Universal Action for the Defense of Human Rights, based in the Democratic Republic of Congo.
        </span>
      </p>
    </div>
    <div class="subscribe-link">
      <a href="https://greatlakescrisis.org/register/" id="subscribe_link">Subscribe For More</a>
    </div>
  </div>

  <style>
    p{
      font-family: Roboto;
      font-weight: 400;
    }

    .blurred-text {
      filter: blur(4px);
      transition: filter 0.3s ease;
      position: relative;
    }

    .subscribe-link{
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
      bottom: 100px;
    }

    .subscribe-link #subscribe_link {
      background: #f27f0c;
      color: #053f5c;
      padding: 10px 30px;
      border-radius: 10px;
      font-weight: 700;
      text-decoration: none;
      cursor: pointer;
      transition: all 400ms ease-in-out;
    }

    .subscribe-link #subscribe_link:hover {
      background: #053f5c;
      color: #f27f0c;
    }
  </style>

<?php endif;