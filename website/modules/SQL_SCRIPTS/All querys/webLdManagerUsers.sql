

CREATE TABLE [dbo].[webLdManagerUsers](
	[id] [tinyint] IDENTITY(1,1) NOT NULL,
	[username] [varchar](10) NOT NULL,
	[password] [varchar](10) NOT NULL,
	[previlegy] [tinyint] NOT NULL CONSTRAINT [DF_webLdManagerUsers_previlegy]  DEFAULT ((0))
) ON [PRIMARY]
GO