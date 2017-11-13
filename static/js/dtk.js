

// Generated by CoffeeScript 1.10.0
(function() {
  $(function() {
    var isExits;
    isExits = function(v) {
      if (typeof v === 'undefined') {
        layer.msg("返回格式不对");
        return false;
      } else {
        return true;
      }
    };
    $("#ajaxSEO").click(function() {
      var style;
      style = 'seo';
      $.ajax('index.php?r=UserConfig/addEdit', {
        type: 'post',
        dataType: 'json',
        data: {
          "title": $("#title").val(),
          "keywords": $("#keywords").val(),
          "description": $("#description").val(),
          "style": style
        },
        error: function(jqXHR, textStatus, errorThrown) {
          return layer.msg(errorThrown);
        },
        success: function(res) {
          return layer.msg(res.msg);
        }
      });
    });
    $("#ajaxIndividuality").click(function() {
      var style;
      style = 'gexing';
      $.ajax('index.php?r=UserConfig/addEdit', {
        type: 'post',
        dataType: 'json',
        data: {
          "siteName": $("#siteName").val(),
          "qq": $("#qq").val(),
          "addLinks": $("#addLinks").val(),
          "signature": $("#signature").val(),
          "style": style
        },
        error: function(jqXHR, textStatus, errorThrown) {
          return layer.msg(errorThrown);
        },
        success: function(res) {
          return layer.msg(res.msg);
        }
      });
    });
    $("#ajaxVipSet").click(function() {
      var style;
      style = 'vipset';
      $.ajax('index.php?r=UserConfig/addEdit', {
        type: 'post',
        dataType: 'json',
        data: {
          "tdj": $("#tdj").val(),
          "tj": $("#tj").val(),
          "style": style
        },
        error: function(jqXHR, textStatus, errorThrown) {
          return layer.msg(errorThrown);
        },
        success: function(res) {
          return layer.msg(res.msg);
        }
      });
    });
    $(".ajaxSpanBj").click(function() {
      var delID, obj;
      obj = $(this);
      delID = obj.attr("data-id");
      $.ajax('index.php?r=UserConfig/setMyBj', {
        type: 'post',
        dataType: 'json',
        data: {
          "id": delID
        },
        error: function(jqXHR, textStatus, errorThrown) {
          return layer.msg(errorThrown);
        },
        success: function(res) {
          return layer.msg(res.msg);
        }
      });
    });
    $(".ajaxSpanHb").click(function() {
      var delID, obj;
      obj = $(this);
      delID = obj.attr("data-id");
      $.ajax('index.php?r=UserConfig/setMyHb', {
        type: 'post',
        dataType: 'json',
        data: {
          "id": delID
        },
        error: function(jqXHR, textStatus, errorThrown) {
          return layer.msg(errorThrown);
        },
        success: function(res) {
          return layer.msg(res.msg);
        }
      });
    });
    $(".ajaxSpanHbDel").click(function() {
      var delID, obj;
      obj = $(this);
      delID = obj.attr("data-id");
      $.ajax('index.php?r=UserConfig/delMyHb', {
        type: 'post',
        dataType: 'json',
        data: {
          "id": delID
        },
        error: function(jqXHR, textStatus, errorThrown) {
          return layer.msg(errorThrown);
        },
        success: function(res) {
          return layer.msg(res.msg);
        }
      });
    });
  });

}).call(this);