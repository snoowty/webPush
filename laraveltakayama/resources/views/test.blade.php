<html>
<script>

function notifyMe() {
  // ブラウザーが通知に対応しているかどうかをチェックしましょう
  if (!("Notification" in window)) {
    alert("このブラウザーはデスクトップ通知に対応していません。");
  }

  // 通知の許可が既に得られているかどうかをチェックしましょう
  else if (Notification.permission === "granted") {
    // If it's okay let's create a notification
    var notification = new Notification("こんにちは！");
  }

  // そうでなければ、ユーザーに許可を求める必要があります

else if (Notification.permission !== "denied") {
    Notification.requestPermission().then(function (permission) {
      // ユーザーが許可したら、通知を作成しましょう
      if (permission === "granted") {
        var notification = new Notification("こんにちは！");
      }
    });
  }

  // 最後に、ユーザーが通知を拒否していて、あなたが敬意を
  // 払いたい場合は、これ以上相手を煩わせることはありません。
}

</script>
<button onclick="notifyMe()">Notify me!</button>
</html>

