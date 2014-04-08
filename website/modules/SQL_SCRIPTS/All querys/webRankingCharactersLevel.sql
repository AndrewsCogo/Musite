USE [webSite]
GO
/****** Object:  Table [dbo].[webRankingCharactersLevel]    Script Date: 01/17/2010 14:15:31 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[webRankingCharactersLevel](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[account] [varchar](12) COLLATE Latin1_General_CI_AS NOT NULL,
	[character] [varchar](12) COLLATE Latin1_General_CI_AS NOT NULL,
	[clevel] [smallint] NOT NULL,
	[pkcount] [int] NOT NULL,
	[resets] [int] NOT NULL,
	[mresets] [int] NOT NULL,
	[resetsweek] [int] NOT NULL,
	[resetsmonth] [int] NOT NULL,
	[class] [smallint] NOT NULL
) ON [PRIMARY]
GO
ALTER TABLE [dbo].[webRankingCharactersLevel] WITH NOCHECK ADD
   CONSTRAINT [PK_webRankingCharactersLevel] PRIMARY KEY  CLUSTERED
   (
      [account],
      [character]
   )  ON [PRIMARY]

GO
SET ANSI_PADDING OFF