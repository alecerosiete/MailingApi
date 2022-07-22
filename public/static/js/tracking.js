var tracking = {
  url: {
    params: {},
  },

  init: function () {
    var self = this;
    self.domain = core.getDomainWithoutSubdomain(window.location.href);
    self.prefix = self.domain != "donweb.com" ? "dw_" : "";
    self.url.params = self.getAllQueryStrings();
    if (typeof self.url.params.current_url === 'undefined') {
      self.url.params.current_url = window.location.pathname;
    }
    self.createCookies();
  },

  cookie: new (function () {
    this.set = function (name, value, days, prefix) {
      var domain = core.getDomainWithoutSubdomain(window.location.href);
      var expires = "";

      if (days) {
        var date = new Date();
        date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
        expires = "; expires=" + date.toGMTString();
      }

      document.cookie =
        prefix + name + "=" + value + expires + "; domain=" + domain + "; path=/";

      if (days > -1) console.log("set cookie " + name + ": " + value + ", domain=" + domain);
    };
    this.get = function (name) {
      var nameEQ = name + "=";
      var ca = document.cookie.split(";");

      for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == " ") c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
      }

      return null;
    };
    this.delete = function (name) {
      this.set(name, "", -1);
    };
  })(),

  urlParam: function (id) {
    return id in this.url.params;
  },

  deleteFirstInteractionCookies: function () {
    var self = this,
      cookiesArray = [
        self.prefix + "fi_paid_campaign_id",
        self.prefix + "fi_dw_source",
        self.prefix + "fi_dw_campaign",
        self.prefix + "fi_dw_medium",
        self.prefix + "fi_dw_content",
        self.prefix + "fi_tracking_date",
      ];

    cookiesArray.forEach(function (utm) {
      self.cookie.delete(utm);
    });
  },

  deleteLastInteractionCookies: function () {
    var self = this,
      cookiesArray = [
        self.prefix + "donweb_gclid",
        self.prefix + "dw_source",
        self.prefix + "dw_campaign",
        self.prefix + "dw_medium",
        self.prefix + "dw_content",
        self.prefix + "tracking_date",
        self.prefix + "tracking_referrer",
      ];

    cookiesArray.forEach(function (utm) {
      self.cookie.delete(utm);
    });
  },

  deleteAllCookies: function () {
    var self = this;

    self.deleteFirstInteractionCookies();
    self.deleteLastInteractionCookies();
  },

  deleteCookiesOnCreate: function () {
    var self = this;

    switch (true) {
      case self.hasPaidCampaignParams() && !self.hasFiPaidCampaignId():
        self.deleteAllCookies();
        break;
      case self.hasPaidCampaignParams() && self.hasFiPaidCampaignId():
      case self.hasUtmParams() && !self.hasOldParams():
      case self.referrerIsSearchEngine():
      case self.referrerIsSocial():
        self.deleteLastInteractionCookies();
        break;
    }
  },

  createTimeStamp: function (name) {
    var self = this,
      timestamp = Math.round(new Date().getTime() / 1000);

    name && self.cookie.set(name, timestamp, 30, self.prefix);
  },

  createReferrer: function () {
    var self = this;

    if (self.urlParam("referrer_url")) {
      self.cookie.set("tracking_referrer", self.url.params["referrer_url"], 30, self.prefix);
    } else {
      self.cookie.set("tracking_referrer", document.referrer, 30, self.prefix);
    }
  },

  referrerIsSearchEngine: function () {
    var self = this,
      hasReferrer = self.urlParam("referrer_url"),
      hasCurrentUrl = self.urlParam("current_url"),
      hasDocumentReferrer = document.referrer !== '',
      arrSearch = ["www.google.", "bing.com", "search.yahoo.com"],
      arrResult = [],
      result = false;

    if (hasReferrer && hasCurrentUrl) {
      arrResult = arrSearch.filter(function (item) {
        return self.url.params["referrer_url"].indexOf(item) > -1;
      });

      result = arrResult.length > 0;
    } else if (hasDocumentReferrer) {
      arrResult = arrSearch.filter(function (item) {
        return document.referrer.indexOf(item) > -1;
      });

      result = arrResult.length > 0;
    }

    return result;
  },

  referrerIsSocial: function () {
    var self = this,
      hasReferrer = self.urlParam("referrer_url"),
      hasCurrentUrl = self.urlParam("current_url"),
      arrSearch = [
        "plus.google.com",
        "facebook.com",
        "twitter.com",
        "linkedin.com",
        "instagram.com",
        "taringa.net",
        "reddit.com",
        "blogger.com",
        "meetup.com",
        "wordpress.com",
        "getpocket.com",
        "stackexchange.com",
        "youtube.com",
        "disqus.com",
        "pinterest.com",
        "stackoverflow.com",
        "weebly.com",
      ],
      arrResult = [],
      result = false;

    if (hasReferrer && hasCurrentUrl) {
      arrResult = arrSearch.filter(function (item) {
        return self.url.params["referrer_url"].indexOf(item) > -1;
      });

      result = arrResult.length > 0;
    }

    return result;
  },

  hasPaidCampaignParams: function () {
    var self = this;

    return self.urlParam("gclid") || self.urlParam("pcprovider"); // Adwords/Facebook/LinkedIn
  },

  hasUtmParams: function () {
    var self = this;

    return (
      self.urlParam("utm_source") ||
      self.urlParam("utm_campaign") ||
      self.urlParam("utm_medium") ||
      self.urlParam("utm_content")
    );
  },

  hasOldParams: function () {
    var self = this,
      utmSearch = [
        { utm_source: "email_admin", utm_medium: "email" },
        { utm_source: "notificacion_sistema", utm_medium: "email" },
        { utm_source: "email-dattatec", utm_medium: "email" },
        { utm_source: "pag-error-donweb", utm_medium: "email" },
        { utm_source: "pag-error-dattatec", utm_medium: "email" },
        { utm_source: "email-sistema", utm_medium: "email-sistema" },
        {
          utm_source: "micuenta",
          utm_medium: "boton",
          utm_campaign: "Boton+neuevo+sitio",
        },
        {
          utm_source: "sitio+donweb",
          utm_medium: "banner",
          utm_campaign: "menu_superior",
        },
        {
          utm_source: "sitio+donweb",
          utm_medium: "banner",
          utm_campaign: "menu_superior",
          utm_content: "plan+Ecommerce",
        },
        {
          utm_source: "sitio+donweb",
          utm_medium: "banner",
          utm_campaign: "menu_superior",
          utm_content: "plan+TiendaSimple",
        },
        { utm_medium: "email-sistema", utm_campaign: "logo_sup_common" },
        { utm_source: "notificacion_sistema", utm_campaign: "correo_id_38" },
        {
          utm_content: "plan+Fanpage",
          utm_medium: "banner",
          utm_campaign: "menu_superior",
        },
      ],
      utmResult = [],
      result = false;

    utmResult = utmSearch.filter(function (item) {
      return (
        item.utm_source == self.url.params.utm_source &&
        item.utm_medium == self.url.params.utm_medium &&
        item.utm_campaign == self.url.params.utm_campaign &&
        item.utm_content == self.url.params.utm_content
      );
    });

    if (utmResult.length > 0) result = true;

    return result;
  },

  hasFiPaidCampaignId: function () {
    var self = this;

    return !!self.cookie.get("fi_paid_campaign_id");
  },

  getPaidCampaignName: function () {
    var self = this,
      result = "google";

    if (self.urlParam("pcprovider"))
      result = self.url.params["pcprovider"].toLowerCase();

    return result;
  },

  getPaidCampaignId: function () {
    var self = this,
      type = self.getPaidCampaignName(),
      result = null;

    if (type == "google") {
      result = self.url.params["gclid"];
    }

    return result;
  },

  fixCookieFi: function () {
    var self = this,
      forceDeleteCookies = self.cookie.get("fi_paid_campaign_id") == "adwords";

    if (!self.urlParam("gclid")) return;

    if (forceDeleteCookies) {
      self.deleteFirstInteractionCookies();
    }
  },

  createCookies: function () {
    var self = this;

    //Set Analytics cookies
    if (self.urlParam("ua"))
      self.cookie.set("origin_ua", self.url.params["ua"], 30, self.prefix);
    if (self.urlParam("gacid"))
      self.cookie.set("origin_gacid", self.url.params["gacid"], 30, self.prefix);

    //delete all cookies except firt iteraction
    self.deleteCookiesOnCreate();
    self.fixCookieFi();

    switch (true) {
      //Does the URL have a paid campaign ID parameter?
      case self.hasPaidCampaignParams():
        var campaignId = self.getPaidCampaignId();
        var sourceName = self.getPaidCampaignName();

        //FIRST INTERACTION
        if (!self.hasFiPaidCampaignId()) {
          if (campaignId)
            self.cookie.set("fi_paid_campaign_id", campaignId, 30, self.prefix);
          self.cookie.set("fi_dw_source", sourceName, 30, self.prefix);
          self.cookie.set("fi_dw_medium", "cpc", 30, self.prefix);
          self.createTimeStamp("fi_tracking_date", self.prefix);

          //Parámetros personalizados de adwords
          if (self.urlParam("ad_campaign"))
            self.cookie.set(
              "fi_dw_campaign",
              self.url.params["ad_campaign"],
              30,
              self.prefix
            );
          if (self.urlParam("ad_content"))
            self.cookie.set("fi_dw_content", self.url.params["ad_content"], 30, self.prefix);
        }

        //LAST INTERACTION
        if (campaignId) self.cookie.set("donweb_gclid", campaignId, 30, self.prefix);
        self.cookie.set("dw_source", sourceName, 30, self.prefix);
        self.cookie.set("dw_medium", "cpc", 30, self.prefix);

        self.createTimeStamp("tracking_date");
        self.createReferrer();

        //Parámetro personalizado de adwords
        if (self.urlParam("ad_campaign"))
          self.cookie.set("dw_campaign", self.url.params["ad_campaign"], 30, self.prefix);
        if (self.urlParam("ad_content"))
          self.cookie.set("dw_content", self.url.params["ad_content"], 30, self.prefix);
        break;

      //Does the URL have UTM parameters?
      case self.hasUtmParams():
        //Filter old params
        if (self.hasOldParams()) break;

        //Creamos una cookie con el timestamp.
        self.createTimeStamp("tracking_date");
        //Creamos referrer
        self.createReferrer();

        if (self.urlParam("utm_source"))
          self.cookie.set("dw_source", self.url.params["utm_source"], 30, self.prefix);
        if (self.urlParam("utm_campaign"))
          self.cookie.set("dw_campaign", self.url.params["utm_campaign"], 30, self.prefix);
        if (self.urlParam("utm_medium"))
          self.cookie.set("dw_medium", self.url.params["utm_medium"], 30, self.prefix);
        if (self.urlParam("utm_content"))
          self.cookie.set("dw_content", self.url.params["utm_content"], 30, self.prefix);
        break;

      //Does the referrer comes from a search engine?
      case self.referrerIsSearchEngine():
        
        if (self.urlParam("referrer_url")) {
          var referrer = new URL(self.url.params["referrer_url"]);
          var terms = self.getAllQueryStrings(self.url.params["referrer_url"]).q;
        } else {
          var referrer = new URL(document.referrer);
        }

        //Creamos una cookie con el timestamp.
        self.createTimeStamp("tracking_date");
        //Creamos referrer
        self.createReferrer();

        self.cookie.set("dw_source", referrer.hostname, 30, self.prefix);
        self.cookie.set("dw_campaign", self.url.params["current_url"], 30, self.prefix);
        self.cookie.set("dw_medium", "organic", 30, self.prefix);
        if (terms) self.cookie.set("dw_content", terms, 30, self.prefix);

        break;

      //Does the referrer comes from a social network?
      case self.referrerIsSocial():
        var referrer = new URL(self.url.params["referrer_url"]);

        //Creamos una cookie con el timestamp.
        self.createTimeStamp("tracking_date");
        //Creamos referrer
        self.createReferrer();

        self.cookie.set("dw_source", referrer.hostname, 30, self.prefix);
        self.cookie.set("dw_campaign", self.url.params["current_url"], 30, self.prefix);
        self.cookie.set("dw_medium", "social", 30, self.prefix);
        break;
    }
  },

  //Get params from URL
  getAllQueryStrings: function (data) {
    var url = data ? new URL(data) : window.location;
    var query_string = {};
    var query = url.search.substring(1);
    var vars = query.split("&");

    for (var i = 0; i < vars.length; i++) {
      var pair = vars[i].split("=");
      if(pair.length < 2) {
        continue;
      } else if (typeof query_string[pair[0]] === "undefined") {
        query_string[pair[0]] = decodeURIComponent(pair[1]);
      } else if (typeof query_string[pair[0]] === "string") {
        var arr = [query_string[pair[0]], decodeURIComponent(pair[1])];
        query_string[pair[0]] = arr;
      } else {
        query_string[pair[0]].push(decodeURIComponent(pair[1]));
      }
    }

    return query_string;
  },
};

tracking.init();
